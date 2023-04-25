@extends('layouts.layout')

@section('title')
    {{$title}}
@endsection

@section('header')
    @parent
@endsection

@section('content')
    <div class="container">
        <form class="mt-5" method="post" action="{{route('posts.store')}}">
            @csrf
            <div class="mt-3 form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title" name="title">
            </div>

            <div class="mt-3 form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" rows="3" placeholder="Content" name="content"></textarea>
            </div>

            <div class="mt-3 form-group">
                <label for="rubric_id">Rubric</label>
                <select  class="form-control" id="rubric_id" name="rubric_id">
                    <option>Select rubric</option>
                    @foreach($rubrics as $k => $v)
                        {
                        <option value="{{$k}}">{{$v}}</option>
                        }
                    @endforeach
                </select>
            </div>
            <button type="submit" class="mt-3 btn btn-primary">Submit</button>
        </form>
    </div>
@endsection