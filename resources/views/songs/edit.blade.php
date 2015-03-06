@extends('layout')

@section('content')
<h2>{{$song->title}}</h2>

<?= Form::model($song, array('route'=>array('songs.update',$song->slug),'method'=>'PATCH')) ?>

    @include('songs._form')

<?= Form::close() ?>

<?= delete_form(array('songs.destroy',$song->slug)) ?>

@stop