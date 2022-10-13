<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $check = static::where('name', $model->name)->exists();

            if ($check) {
                $ranCode = Str::random(1) . rand(1, 9) . Str::random(1) . rand(1, 9);
                $code = Str::lower($ranCode);
                $slug = Str::slug($model->name) . '-' . $code;
            } else {
                $slug = Str::slug($model->name);
            }

            $model->slug = $slug;
        });
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
