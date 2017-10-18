@extends('ministrap')

@section('html_head')
<title>{{$page->html_title}} - {{ config('app.name', 'ministrap.css demo page') }}</title>
@endsection

@section('content')
<section>
    <article class="mw-1140 article">
        <h1 class="title">{{$page->head}}</h1>
        <h2 class="subtitle">{{$page->subhead}}</h2>
        {!! $page->body !!}
    </article>
</section>
@endsection
