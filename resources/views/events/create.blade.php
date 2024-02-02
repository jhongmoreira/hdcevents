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
                <label for="title">Data do evento:</label>
                <input type="date" class="form-control" id="date" name="date">
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
            </div">

            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
            </div>

            <div class="form-group">
                <label for="title">Itens de Infraestrutura</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palco"> Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja Grátis
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open Food"> Open Food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Brindes"> Brindes
                </div>
            </div class="form-group">
                <br>
            <input type="submit" class="btn btn-primary" value="Criar evento">
        </form>
    </div>
@endsection