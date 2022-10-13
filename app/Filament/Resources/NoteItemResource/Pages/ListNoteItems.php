<?php

namespace App\Filament\Resources\NoteItemResource\Pages;

use App\Filament\Resources\NoteItemResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNoteItems extends ListRecords
{
    protected static string $resource = NoteItemResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
