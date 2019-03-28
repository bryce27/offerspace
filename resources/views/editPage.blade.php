@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Edit Page</h2><hr />
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{'/pages/'.$page->id}}" method="post">
                @method('PUT')
                {{ csrf_field() }}
                 <input type="hidden" id="id" name="id" value="{{$page->id}}">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="title" placeholder="Page title" name="title" value="{{$page->title}}">
                </div>
                <div class="form-group">
                  <textarea class="form-control form-control-lg" id="content" rows="7" name="content">{{$page->content}}</textarea>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
