<?php

namespace App\Traits;

use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

trait UuidGenerator
{
  use HasUuids;

    public function newUniqueId()
    {
        return (string) Uuid::uuid4();
    }

    public function uniqueIds()
    {
        return ['uuid'];
    }
}
