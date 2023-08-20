<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;

class Article extends Model implements Feedable
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'slug',
        'title',
        'description',
        'keywords',
        'content',
        'status',
        'published_at'
    ];

    protected $casts = [
        'published_at' => 'immutable_datetime'
    ];

    public function getAllPublished(): Collection
    {
        return $this->whereStatus('published')->orderBy('id', 'desc')->get();
    }

    public function toFeedItem(): FeedItem
    {
        $link = url('artigos/' . $this->slug);

        return FeedItem::create()
            ->id($this->id)
            ->title($this->title)
            ->summary($this->description)
            ->updated($this->published_at)
            ->link($link)
            ->authorName('Erick Patrick')
            ->authorEmail('itsme@erickpatrick.net');
    }
}
