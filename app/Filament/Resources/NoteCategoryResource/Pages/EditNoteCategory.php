<?php

namespace App\Filament\Resources\NoteCategoryResource\Pages;

use App\Filament\Resources\NoteCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNoteCategory extends EditRecord
{
    protected static string $resource = NoteCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
