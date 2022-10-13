<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MyNoteHistory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function my_note_item(): BelongsTo
    {
        return $this->belongsTo(MyNoteItem::class, 'my_note_item_id');
    }

    public function my_note_category(): BelongsTo
    {
        return $this->belongsTo(MyNoteCategory::class, 'my_note_category_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
