@extends('layouts.main')
@section('content')
<main class="main-index d-flex flex-column align-items-center">
    <div  class="my-2 text-center">
        <h3 class="mb-4">Back-Office Uova</h3>
        <a class="btn btn-success" href="{{route("eggs.create")}}">Aggiungi +</a>
    </div>

    <table class="table table-sm my-3 ">
            <thead>
              <tr>
                <th scope="col">Colore</th>
                <th scope="col">Sorpresa</th>
                <th scope="col">Cioccolato</th>
                <th scope="col">Dimensioni</th>
                <th scope="col">Azione</th>
              </tr>
            </thead>
            <tbody>
    
              <tr>
                @foreach($eggs as $egg)
                <td >{{$egg->package_color}}</td>
                <td >{{$egg->surprise}}</td>
                <td >{{$egg->type_chocolate}}</td>
                <td >{{$egg->size}}</td>
                <td class="td-btn">
                    <button type="button" class="btn btn-warning">Modifica</button>
                    <button type="button" class="btn btn-danger">Elimina</button>
                </td>
              </tr>
              @endforeach
            </tbody>
      </table>
</main>
@endsection