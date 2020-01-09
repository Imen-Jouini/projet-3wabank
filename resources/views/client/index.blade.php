  @extends('layouts/myapp')        
    @section('content')
                <div class="jumbotron">
                  <a href="{{route('client.create')}}"class="btn btn-info">Nouveau Client</a>
                	<h1>List des clients</h1>
                </div>
                @if (count($clients)>0)
                <ul class="list-group">
                  
                   @foreach ($clients as $client)
                   <li class="list-group-item"><a href="client/{{$client->id}}"> <p>
                    {{$client->prenom}}{{$client->Tel}}</p></a></li>
                  
                     @endforeach
                     <div class="py-3">
                      {{$clients->links()}}
                    </div>
                        </ul>
                     @else
                     <h2 class="text-center py-4">Il n'ya a pas de clients
                      <h2>
                        @endif
                 
                 
    @endsection

