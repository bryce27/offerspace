@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>New Page</h2><hr />
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/pages" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="title" placeholder="Page title" name="title">
                </div>
                <div class="form-group">
                  <textarea class="form-control form-control-lg" id="content" rows="7" name="content"></textarea>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
