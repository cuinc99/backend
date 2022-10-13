<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $check = static::where('title', $model->title)->exists();

            if ($check) {
                $ranCode = Str::random(1) . rand(1, 9) . Str::random(1) . rand(1, 9);
                $code = Str::lower($ranCode);
                $slug = Str::slug($model->title) . '-' . $code;
            } else {
                $slug = Str::slug($model->title);
            }

            $model->slug = $slug;
            $model->user_id = $model->user_id ?? 1;
        });
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
