@extends('default')

@section('title')
Create Sushi
@endsection
@section('content')
<article class="create-form a-popup">
    <form class="create-form__form" action="/sushi" method="POST">
        @csrf

        <section class="create-form__section">
            <label for="name"> Name </label>
            <input class="create-form__input" name="name" id="name" type="text" />
        </section>
        <section class="create-form__section">
            <label for="kind"> Kind </label>
            <select class="create-form__input" name="kind" id="kind">
                @foreach($kind_of_sushi as $kind_of_sushi)
                    <option value={{$kind_of_sushi->kind}}> {{$kind_of_sushi->kind}} </option>
                @endforeach
            </select>
        </section>
        <section class="create-form__section">
            <label for="description"> Description </label>
            <textarea class="create-form__input create-form__input--big" name="description" id="description"></textarea>
        </section>
        <section class="create-form__section">
            <label for="image"> Image </label>
            <select class="create-form__input" name="image" id="image">
                @foreach($images as $image)
                    <option value={{$image->image}}> {{$image->image}} </option>
                @endforeach
            </select>
        </section>
        <section class="create-form__section">
            <button class="create-form__button" type="submit"> Submit </button>
        </section>
    </form>
</article>
@endsection
