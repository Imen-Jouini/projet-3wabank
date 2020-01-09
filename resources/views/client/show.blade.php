
  @extends('layouts/myapp')        
    @section('content')
     @if (session('successNewClient'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('successNewClient') }}
        </div>
    @endif
                <div class="jumbotron">
                  <h1>Client</h1>
                </div>
                  <ul class="list-group">
                    <li class="list-group-item"><p>nom: {{$client->nom}}</p>
                    <p>prenom:{{$client->prenom}}</p>
                  <p>Tel: {{$client->Tel}}</p>
                 <p> adresse: {{$client->adresse}}</p>
                  <p> datNaissance: {{$client->datNaissance}}</p>
                  <p> Tel: {{$client->Tel}}</li>
              <div class="panel-footer py-3">      
         <a href="{{route('client.edit',['client'=>$client->id])}}"class="btn btn-info">Edit</a>
        
            </div>         
                 
    @endsection
