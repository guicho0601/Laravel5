@extends('layout')

@section('content')
<ul>
@foreach($songs as $song)
    <li>
        <?= link_to_route('songs.show',$song->title, [$song->slug]) ?>
    </li>
@endforeach
</ul>
@stop