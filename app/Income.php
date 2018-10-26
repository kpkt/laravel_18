<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
 * @mixin \Eloquent
 */
class Income extends Model
{
    // Define field from DB table as a DATE/DATETIME value data
    protected $dates = ['date'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
