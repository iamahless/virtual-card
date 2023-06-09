<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @method static create(array $array)
 */
class VirtualCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'slug',
        'phone',
        'linkedin_url',
        'github_url',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($virtualCard) {
            $virtualCard->slug = $virtualCard->generateSlug($virtualCard->name);
            $virtualCard->save();
        });
    }

    private function generateSlug($name)
    {
        if (static::whereSlug($slug = Str::slug($name))->exists()) {
            $max = static::whereName($name)->latest('id')->skip(1)->value('slug');

            if (! is_null($max) && is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function ($matches) {
                    return $matches[1] + 1;
                }, $max);
            }

            return "{$slug}-2";
        }

        return $slug;
    }
}
