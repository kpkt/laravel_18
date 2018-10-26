<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
 * @mixin \Eloquent
 */
class Expense extends Model
{
    protected $dates = ['date'];
}
