
  @extends('layouts/myapp')        
    @section('content')
                <div class="jumbotron">
                  <fieldset>
                  <legend>Modifier Client</legend>
                  <form action="{{route('client.update',['client'=>$client->id])}}" method="post">
                    @method('PATCH')
                      @include('client.form')
                    </form>
                    </fieldset>
                  </div>     
        
                     
                 
    @endsection