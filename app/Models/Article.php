<?php

namespace App\Models;

use App\Casts\PublishedStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        'published_at' => 'immutable_datetime',
        'status' => PublishedStatus::class
    ];

    protected $with = [
        'series'
    ];

    public function series(): BelongsTo
    {
        return $this->belongsTo(Serie::class, 'serie_id');
    }

    public function isPartOfSerie(): bool
    {
        return (bool) $this->series?->count();
    }

    public function getSerieSiblings(): Collection|null
    {
        return $this->isPartOfSerie() ? $this->series->articles()->get() : null;
    }

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
