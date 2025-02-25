<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'deadline_dateTime',
        'importance',
        'category_id',
        'user_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getByLimit(int $limit_count = 1)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }

    public function scopeGetPaginateByLimit($query, int $limit_count = 4)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $query->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

    protected $casts = [
        'deadline_dateTime' => 'datetime',
    ];

}
