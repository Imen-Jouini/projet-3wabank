
  @extends('layouts/myapp')        
    @section('content')
                <div class="jumbotron">
                  <fieldset>
                  <legend>Creation Nouveau Client</legend>
                  <form action="{{route('client.store')}}" method="post">
                      @include('client.form')
                    </form>
                    </fieldset>
                  </div>     
        
                     
                 
    @endsection