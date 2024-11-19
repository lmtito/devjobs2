<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\JobOffer;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Filament\Forms\Components\Actions\Action;
use Filament\Tables\Actions\ExportBulkAction;
use App\Filament\Resources\JobOfferResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\JobOfferResource\RelationManagers;

class JobOfferResource extends Resource
{
    protected static ?string $model = JobOffer::class;
    protected static ?string $modelLabel = 'Oferta Laboral';
    protected static ?string $pluralModelLabel = 'Ofertas Laborales';
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationLabel = 'Ofertas Laborales';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('Label')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('Vacante')
                            ->schema([
                                Forms\Components\FileUpload::make('image')
                                    ->label('Imagen')
                                    ->columnSpanFull(),
                                Forms\Components\TextInput::make('title')
                                    ->label('Título')
                                    ->required()
                                    ->maxLength(255),
                                    //->columnSpanFull(),
                                Forms\Components\Select::make('sector_id')
                                    ->label('Sector')
                                    ->relationship('sector', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->required(),
                                Forms\Components\Textarea::make('short_description')
                                    ->label('Descripción Corta')
                                    ->columnSpanFull(),
                                Forms\Components\Textarea::make('description')
                                    ->label('Descripción Completa')
                                    ->columnSpanFull(),
                                Forms\Components\Textarea::make('benefits')
                                    ->label('Ofrecimientos')
                                    ->columnSpanFull(),
                                Forms\Components\DatePicker::make('start_date')
                                    ->label('Fecha de Inicio')
                                    ->displayFormat('d/m/Y')
                                    ->required(),
                                Forms\Components\DatePicker::make('end_date')
                                    ->label('Fecha de Fin')
                                    ->displayFormat('d/m/Y')
                                    ->required(),
                            ])
                            ->columns(2),

                        Forms\Components\Tabs\Tab::make('Requisitos')
                            ->schema([
                                Forms\Components\Select::make('requirements')
                                    ->label('Requisitos')
                                    ->relationship('requirements', 'description')
                                    ->multiple()
                                    ->searchable()
                                    ->preload()
                                    ->required()
                                    ->manageOptionForm([
                                        Forms\Components\Section::make()
                                            //->schema(Requirement::getDetailsFormSchema())
                                            ->schema([
                                                Forms\Components\Textarea::make('description')
                                                ->label('Descripción')
                                                ->required()
                                                ->columnSpanFull(),
                                                Forms\Components\Toggle::make('requires_document')
                                                ->label('Requiere Documento')
                                                ->required(),
                                            ]),
                                    ])
                                    ->createOptionAction(function (Action $action) {
                                        return $action
                                            ->modalHeading('Crear Requisito')
                                            ->modalSubmitActionLabel('Crear Requisito');
                                            //->modalWidth('7xl');
                                    }),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Imagen')
                    ->square()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('title')
                    ->label('Título')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sector.name')
                    ->label('Sector')
                    ->sortable(),
                Tables\Columns\TextColumn::make('sector.manager.name')
                    ->label('Encargado')
                    ->sortable(),
                Tables\Columns\TextColumn::make('short_description')
                    ->label('Descripción Corta')
                    ->html()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('requirements.description')
                    ->label('Requisitos')
                    ->listWithLineBreaks()
                    ->bulleted()
                    ->searchable(),
                Tables\Columns\TextColumn::make('benefits')
                    ->label('Ofrecimientos')
                    ->searchable(),
                Tables\Columns\TextColumn::make('start_date')
                    ->label('Fecha de Inicio')
                    ->date('d/m/Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->label('Fecha de Fin')
                    ->date('d/m/Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->label('Eliminado')
                    ->dateTime('d/m/Y H:i:s')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Creado')
                    ->dateTime('d/m/Y H:i:s')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Actualizado')
                    ->dateTime('d/m/Y H:i:s')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('sector')
                    ->label('Sector')
                    ->relationship('sector', 'name')
                    ->searchable()
                    ->preload(),
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->hidden(fn ($record) => $record->has_any_relation),
                Tables\Actions\ForceDeleteAction::make()
                    ->hidden(fn ($record) => $record->has_any_relation),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
                Tables\Actions\BulkAction::make('downloadPdf')
                    ->label('Descargar PDF')
                    ->color('warning')
                    ->icon('heroicon-o-arrow-down-on-square')
                    ->action(function (Collection $records) {
                        $pdf = Pdf::loadView('pdfs.job_offers', ['job_offers' => $records]);
                        return response()
                            ->streamDownload(function () use ($pdf) {
                                echo $pdf->download('job_offers.pdf');
                            }, 'job_offers.pdf', ['Content-Type' => 'application/pdf']);
                    }),
                ExportBulkAction::make()
                    ->label('Exportar a Excel')
                    ->color('success'),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJobOffers::route('/'),
            'create' => Pages\CreateJobOffer::route('/create'),
            'view' => Pages\ViewJobOffer::route('/{record}'),
            'edit' => Pages\EditJobOffer::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
