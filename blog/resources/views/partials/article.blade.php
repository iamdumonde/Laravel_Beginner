<article>
    <div class="card my-4 mx-4">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title">L'auteur de cet article : {{$article->user->name}}</h3>
            <div>
                <strong>Titre de l'article :</strong> <a href="/article/{{ $article->id }}">
                    {{ $article['title'] }}
                </a>
            </div>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</article>
