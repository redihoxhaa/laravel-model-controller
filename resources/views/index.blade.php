@extends('templates.template')

@include('subs.header')

@section('main')
    <ul class="row g-5">
        @foreach ($movies as $movie)
            <li class="col-4">
                <div class="card p-5 text-center">
                    <h2 class="py-4 text-uppercase">{{ $movie['title'] }}</h2>
                    <h5 class="pb-3">{{ $movie['original_title'] }}</h5>
                    <p>An {{ $movie['nationality'] }} production</p>
                    <p>Released on {{ \Carbon\Carbon::parse($movie['date'])->format('M d Y') }}</p>
                    <p>With an overall score of {{ $movie['vote'] }} </p>

                </div>
            </li>
        @endforeach
    </ul>
@endsection

@include('subs.footer')
