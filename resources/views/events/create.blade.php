@extends('layouts.main')
@section('title','Criar registro')
@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crise seu evento</h1>
        <form action="/events" method="POST">
            @csrf
            <form-group>
                <label for="title">Evento</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </form-group>

            <form-group>
                <label for="title">Cidade</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
            </form-group>

            <form-group>
                <label for="title">Evento privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </form-group>

            <form-group>
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Insira a descrição"></textarea>
            </form-group>

            <input type="submit" class="btn btn-primary" value="Criar evento">
        </form>
    </div>
@endsection