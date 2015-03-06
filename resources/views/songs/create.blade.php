@extends('layout')

@section('content')
    <h2>Add a new song</h2>

    <?= Form::open(array('route'=>'songs.store')) ?>

    @include('songs._form')

    <?= Form::close() ?>

@stop