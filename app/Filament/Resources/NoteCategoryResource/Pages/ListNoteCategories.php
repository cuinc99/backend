<?php

namespace App\Filament\Resources\NoteCategoryResource\Pages;

use App\Filament\Resources\NoteCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNoteCategories extends ListRecords
{
    protected static string $resource = NoteCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
