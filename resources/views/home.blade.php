@extends('layouts.layout')

@section('title')
    @parent:: {{$title}}
@endsection

@section('header')
    @parent
    {{--    123--}}
@endsection


@section('content')

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                {{--{{$h1}}--}} {{-- с обработкой html special chars--}}
                {{-- {!! mb_strtoupper($h1) !!} --}}{{-- без обработки html special chars--}}
                {{--$title--}}

                {{--                @if(count($data1) > 20)--}}
                {{--                    Count > 20--}}
                {{--                @elseif(count($data1) < 20)--}}
                {{--                    Count < 20--}}
                {{--                @else--}}
                {{--                    Count = 20--}}
                {{--                @endif--}}

                {{--                @isset($data2)--}}
                {{--                    Isset data2--}}
                {{--                @endisset--}}

                {{--                @production--}}
                {{--                    <h1>PRODUCTION</h1>--}}
                {{--                @endproduction--}}

                {{--                @env('local')--}}
                {{--                    <h1>LOCAL</h1>--}}
                {{--                @endenv--}}

                {{--                @for($i = 0; $i < count($data1); $i++)--}}
                {{--                    @if($data1[$i] % 2 !== 0)--}}
                {{--                        @continue--}}
                {{--                    @elseif($data1[$i] === 6 || $data1[$i] === 8)--}}
                {{--                        @continue--}}
                {{--                    @elseif($data1[$i] === 16)--}}
                {{--                        @break--}}
                {{--                    @endif--}}
                {{--                    {{$data1[$i]}}--}}
                {{--                @endfor--}}
                {{--                @foreach($data2 as $k => $v)--}}
                {{--                    {{$k}} => {{$v}} <br>--}}
                {{--                @endforeach--}}

                <h1>{{$title}}</h1>
            </div>
        </div>
    </section>

    <div class="0 py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($posts as $post)
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                 xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                 preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title">{{$post->title}}</h5>
                                <p class="card-text">{{$post->content}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-body-secondary">
{{--                                        {{$post->created_at}}--}}
{{--                                        {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$post->created_at)->format('d M Y')}}--}}
                                        {{$post->getPostDate()}}
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection