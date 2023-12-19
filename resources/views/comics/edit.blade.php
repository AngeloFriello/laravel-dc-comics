@extends('layouts.app')

@section('content')
    <section>
        <div class="container">

            <form action="{{ route('comics.update', $comic)}}" method="POST">
                
                @csrf

                @method('PUT')

                <div>
                    <label for="title" class="form-label">title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="titolo" value="{{$comic->title}}">
                </div>

                <div>
                    <label for="description" class="form-label">description</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="descrizione" value="{{$comic->description}}">
                </div>

                <div>
                    <label for="type" class="form-label">type</label>
                    <input type="text" class="form-control" name="type" id="type" placeholder="tipologia" value="{{$comic->type}}">
                </div>

                <div>
                    <label for="price" class="form-label">price</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="prezzo" value="{{$comic->price}}">
                </div>

                <div>
                    <label for="series" class="form-label">series</label>
                    <input type="text" class="form-control" name="series" id="series" placeholder="serie" value="{{$comic->series}}">
                </div>

                <div>
                    <label for="sale_date" class="form-label">sale date</label>
                    <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="data-di-vendita" value="{{$comic->sale_date}}">
                </div>

                <div>
                    <label for="thumb" class="form-label">thumb</label>
                    <input type="text" class="form-control" name="thumb" id="thumb" placeholder="immagine" value="{{$comic->thumb}}">
                </div>

                <div>
                    <input type="submit" value="crea" class="btn btn-primary my-2">
                </div>

            </form>
        </div>
    </section>
@endsection