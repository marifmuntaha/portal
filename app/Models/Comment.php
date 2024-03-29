<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table        = 'entity__comments';
    protected $fillable     = ['comment_name', 'comment_email', 'comment_content', 'comment_read'];
    protected $primaryKey   = 'comment_id';

    public function post()
    {
        return $this->belongsToMany(
            Post::class,
            'entity__posts_comment',
            'comment_id',
            'post_id'
        );
    }

    public function create_at()
    {
        return Carbon::parse($this->create_at)->translatedFormat('d M Y');
    }

    static function unread()
    {
        return self::where('comment_read', 1)->count();
    }

    static function parent($id)
    {
        return self::where('comment_parent', $id);
    }
}
