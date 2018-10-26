<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Category
 *
 * @property int $id
 * @property string|null $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Expense
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $category_id
 * @property string|null $amount
 * @property \Illuminate\Support\Carbon|null $date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Expense whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Expense whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Expense whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Expense whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Expense whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Expense whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Expense whereUpdatedAt($value)
 */
	class Expense extends \Eloquent {}
}

namespace App{
/**
 * App\Photo
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Photo onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Photo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Photo withoutTrashed()
 */
	class Photo extends \Eloquent {}
}

namespace App{
/**
 * App\Income
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $category_id
 * @property string|null $amount
 * @property \Illuminate\Support\Carbon|null $date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Income whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Income whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Income whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Income whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Income whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Income whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Income whereUpdatedAt($value)
 */
	class Income extends \Eloquent {}
}

