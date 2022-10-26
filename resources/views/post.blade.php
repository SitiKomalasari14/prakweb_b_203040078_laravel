
@extends('layouts.main')

@section('container')
<article>
    <h1 class="mb-5">{{ $post->title }}</h1>

    {{-- <h5>{{ $post["author"] }}</h5> --}}

    {!! $post->body !!}
</article>

<a href="/blog" class="btn btn-primary btn-sm">Back to Posts</a></a>
  @endsection
