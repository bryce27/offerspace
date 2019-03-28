@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>All Pages</h2><hr />
            @if (count($pages) )
            <ul class="list-group">
                @foreach ($pages as $page)
                  <li class="list-group-item"><a href="{{'/pages/'.$page->id}}" style="font-size: 18px">{{$page->title}}</a></li>
                @endforeach
            </ul>
            @else
            <p style="font-size: 18px">No pages yet. <a href="/pages/create">Would you like to create one?</a></p>
            @endif
        </div>
    </div>
</div>
@endsection
