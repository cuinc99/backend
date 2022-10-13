<?php

namespace App\Models;

use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MyNoteItem extends Model
{
    use HasFactory;
    use UuidGenerator;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($model) {
            $latestMyNoteItem = static::where('my_note_category_id', $model->my_note_category_id)->orderByDesc('order')->first();

            $model->order = $latestMyNoteItem->order + 1;
            $model->save();
        });
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
