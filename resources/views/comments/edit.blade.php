@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        @if(Auth::id() == $comment->user->id)
        <h1 class="text text-light text-center mb-3"> Edit Comment </h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col">
                    <form action="/comments/ {{ $comment->id }}" method="POST">
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="form-group">
                            <form class="table" action="/comments" method="POST">
                                @csrf
                                <textarea name="body" class="form-control">{{ $comment->body }}</textarea>

                                <button type="submit" class="btn btn-primary btn-sm mt-2 mb-2">Save</button>
                                <giphy-search value="{{ $comment->gif }}"></giphy-search>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @else
            <div class="col alert alert-danger">
                There is something wrong!
            </div>
        @endif
    </div>
    @include('layouts/footer')
@endsection
