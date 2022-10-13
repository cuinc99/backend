<?php

namespace App\Filament\Resources\NoteItemResource\Pages;

use App\Filament\Resources\NoteItemResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNoteItem extends CreateRecord
{
    protected static string $resource = NoteItemResource::class;
}
