<?php

namespace App\Filament\Resources\NoteItemResource\Pages;

use App\Filament\Resources\NoteItemResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNoteItem extends EditRecord
{
    protected static string $resource = NoteItemResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
