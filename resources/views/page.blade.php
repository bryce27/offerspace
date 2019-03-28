@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>{{ $page->title }}</h2><hr />
            <div class="card" style="margin-top: 10px">

                <div class="card-body">
                    <p style="font-size: 18px">{{ $page->content }}</p>
                </div>

            </div><br />
            <a class="btn btn-primary" href="{{'/pages/'.$page->id.'/edit'}}" role="button">Edit</a>

        </div>
    </div>
</div>
@endsection
