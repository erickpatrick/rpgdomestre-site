<h2>{{ $serie->name }}</h2>

<p>{{ $serie->description }}</p>

<p>Veja todos os artigos da série:</p>

@if ($serie->hasArticles())
<ul>
    @foreach ($serie->articles()->get() as $article)
    <li><a href="/artigos/{{ $article->slug }}">{{ $article->title }}</a></li>
    @endforeach
</ul>
@endif
