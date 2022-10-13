<?php

namespace App\Filament\Resources\NoteCategoryResource\Pages;

use App\Filament\Resources\NoteCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNoteCategory extends CreateRecord
{
    protected static string $resource = NoteCategoryResource::class;
}
