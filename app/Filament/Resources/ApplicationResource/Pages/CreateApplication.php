<?php

namespace App\Filament\Resources\ApplicationResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Auth;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ApplicationResource;

class CreateApplication extends CreateRecord
{
    protected static string $resource = ApplicationResource::class;
/*
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = Auth::user()->id;

        return $data;
    }

    public static function canCreateAnother(): bool
    {
        return false;
    }
*/
}
