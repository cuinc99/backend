<?php

namespace App\Models;

use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NoteItem extends Model
{
    use HasFactory;
    use UuidGenerator;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($model) {
            $latestNoteItem = static::where('note_category_id', $model->note_category_id)->orderByDesc('order')->first();

            $model->order = $latestNoteItem->order + 1;
            $model->save();
        });
    }

    public function note_category(): BelongsTo
    {
        return $this->belongsTo(NoteCategory::class, 'note_category_id');
    }
}
