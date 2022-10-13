<?php

namespace App\Models;

use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MyNoteCategory extends Model
{
    use HasFactory;
    use UuidGenerator;

    protected $guarded = [];

    public function my_note_items(): HasMany
    {
        return $this->hasMany(MyNoteItem::class)->orderByDesc('order');
    }

    public function note_category(): BelongsTo
    {
        return $this->belongsTo(NoteCategory::class, 'note_category_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
