@extends('layouts.main')
@section('title','Criar registro')
@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie seu evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Foto do Evento</label><br>
                <input type="file" class="form-control" id="image" name="image">
            </div class="form-group">

            <div class="form-group">
                <label for="title">Evento</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div class="form-group">

            <div class="form-group">
                <label for="title">Cidade</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
            </div class="form-group">

            <div class="form-group">
                <label for="title">Evento privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div class="form-group">

            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Insira a descrição"></textarea>
            </div class="form-group">

            <input type="submit" class="btn btn-primary" value="Criar evento">
        </form>
    </div>
@endsection