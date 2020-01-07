
  @extends('layouts/myapp')        
    @section('content')
                <div class="jumbotron">
                	<h1>{{$titre}}</h1>
                </div>
                <ul class="list-group">
                   @foreach ($listeServ as $serv)
                   <li class="list-group-item"> {{$serv}}</li>
                     @endforeach
                     </ul>
                 
    @endsection



