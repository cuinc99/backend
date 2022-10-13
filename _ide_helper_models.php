<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $slug
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $posts
 * @property-read int|null $posts_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MyNoteCategory
 *
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property int|null $note_category_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MyNoteItem[] $my_note_items
 * @property-read int|null $my_note_items_count
 * @property-read \App\Models\NoteCategory|null $note_category
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteCategory whereNoteCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteCategory whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteCategory whereUuid($value)
 */
	class MyNoteCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MyNoteHistory
 *
 * @property int $id
 * @property int $my_note_item_id
 * @property int $my_note_category_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\MyNoteCategory $my_note_category
 * @property-read \App\Models\MyNoteItem $my_note_item
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteHistory whereMyNoteCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteHistory whereMyNoteItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteHistory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteHistory whereUserId($value)
 */
	class MyNoteHistory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MyNoteItem
 *
 * @property int $id
 * @property string $uuid
 * @property string $title
 * @property int|null $order
 * @property int $my_note_category_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\MyNoteCategory $my_note_category
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteItem whereMyNoteCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteItem whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteItem whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteItem whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyNoteItem whereUuid($value)
 */
	class MyNoteItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NoteCategory
 *
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MyNoteCategory[] $my_note_categories
 * @property-read int|null $my_note_categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NoteItem[] $note_items
 * @property-read int|null $note_items_count
 * @method static \Illuminate\Database\Eloquent\Builder|NoteCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NoteCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NoteCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|NoteCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NoteCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NoteCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NoteCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NoteCategory whereUuid($value)
 */
	class NoteCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NoteItem
 *
 * @property int $id
 * @property string $uuid
 * @property string $title
 * @property int|null $order
 * @property int $note_category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\NoteCategory $note_category
 * @method static \Illuminate\Database\Eloquent\Builder|NoteItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NoteItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NoteItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|NoteItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NoteItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NoteItem whereNoteCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NoteItem whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NoteItem whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NoteItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NoteItem whereUuid($value)
 */
	class NoteItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Post
 *
 * @property int $id
 * @property string $slug
 * @property string $title
 * @property string|null $content
 * @property string|null $excerpt
 * @property string|null $feature_image
 * @property int|null $is_approved
 * @property int $category_id
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category $category
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereFeatureImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereIsApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUserId($value)
 */
	class Post extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string $role
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property mixed $user_type
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $posts
 * @property-read int|null $posts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

