<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum ApplicantStatus: string implements HasColor, HasIcon, HasLabel
{
    case PENDING = 'Pendiente';
    case ACCEPTED = 'Aceptado';
    case REJECTED = 'Rechazado';

    public static function values(): array
    {
        return array_map(fn ($case) => $case->value, ApplicantStatus::cases());
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::PENDING => 'warning',
            self::ACCEPTED => 'success',
            self::REJECTED => 'danger',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::PENDING => 'heroicon-o-clock',
            self::ACCEPTED => 'heroicon-o-check-circle',
            self::REJECTED => 'heroicon-o-x-circle',
        };
    }

    public function getLabel(): ?string
    {
        return $this->value;
    }
}
