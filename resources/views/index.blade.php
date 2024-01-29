@extends('templates.template')

@include('subs.header')

@section('main')
    <ul class="row g-5">
        @foreach ($movies as $movie)
            <li class="col-12 col-md-6 col-xl-4">
                <div class="card-custom">
                    <div class="tools">
                        <div class="circle">
                            <span class="red box"></span>
                        </div>
                        <div class="circle">
                            <span class="yellow box"></span>
                        </div>
                        <div class="circle">
                            <span class="green box"></span>
                        </div>
                    </div>
                    <div class="card__content p-5">
                        <h2 class="py-4 text-uppercase">{{ $movie['title'] }}</h2>
                        <h5 class="pb-3">{{ $movie['original_title'] }}</h5>
                        <p>An {{ $movie['nationality'] }} production</p>
                        <p>Released on {{ \Carbon\Carbon::parse($movie['date'])->format('M d Y') }}</p>
                        <p class="score">With an overall score of {{ $movie['vote'] }} </p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endsection

@include('subs.footer')
