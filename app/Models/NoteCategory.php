<?php

namespace App\Models;

use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NoteCategory extends Model
{
    use HasFactory;
    use UuidGenerator;

    protected $guarded = [];

    public function note_items(): HasMany
    {
        return $this->hasMany(NoteItem::class)
            ->orderBy('order', 'asc');
    }

    public function my_note_categories(): HasMany
    {
        return $this->hasMany(MyNoteCategory::class);
    }
}
