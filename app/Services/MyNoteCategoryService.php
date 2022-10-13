<?php

namespace App\Services;

use App\Models\MyNoteItem;
use App\Models\NoteCategory;
use Illuminate\Support\Str;

class MyNoteCategoryService
{
  static public function copyNoteCategory($noteCategoryUuid, $userId)
  {
    $noteCategory = NoteCategory::query()
      ->where('uuid', $noteCategoryUuid)
      ->firstOrFail();

    $myNoteCategory = $noteCategory->replicate();
    $myNoteCategory['uuid'] = Str::uuid();
    $myNoteCategory['note_category_id'] = $noteCategory->id;
    $myNoteCategory['user_id'] = $userId;
    $myNoteCategory['created_at'] = now();
    $myNoteCategory['updated_at'] = now();
    $myNoteCategory->setTable('my_note_categories');
    $myNoteCategory->save();

    $noteCategory->note_items()
      ->each(
        function ($noteItem) use ($myNoteCategory, $userId) {
          $myNoteItem = $noteItem->toArray();
          $myNoteItem['uuid'] = Str::uuid();
          $myNoteItem['my_note_category_id'] = $myNoteCategory->id;
          $myNoteItem['user_id'] = $userId;
          $myNoteItem['created_at'] = now();
          $myNoteItem['updated_at'] = now();
          unset($myNoteItem['note_category_id'], $myNoteItem['order']);
          MyNoteItem::create($myNoteItem);
        }
      );
  }
}
