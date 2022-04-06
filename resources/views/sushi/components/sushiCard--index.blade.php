<li class="a-popup u-list-style-none sushiGridCard" data-kind-of-sushi={{$sushi->kind}}>
    <a href="/sushi/{{$sushi->id}}">
        <article class="sushiGridCard__article">
            <header class="sushiGridCard__header u-flex-v-center">
                <h2 class="sushiGridCard__heading"> {{$sushi->kind}} {{$sushi->name}} </h2>
            </header>
            <figure class="sushiGridCard__figure">
            <img class="sushiGridCard__image" src="{{$sushi->image}}" alt="{{$sushi->name . ' ' . $sushi->kind}}" />
            </figure>
            <section class="sushiGridCard__textsection u-flex-v-center">
                <p class="sushiGridCard__text">{{$sushi->description}}</p>
            </section>
        </article>
    </a>
</li>