@csrf

 <div class="form-group">
    <label for="exampleInputEmail1">Nom:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nom" value="{{old('nom')?? $client->nom}}">
     @error('nom')
    <p class="text-danger">{{$message}}}</p>

    @enderror
</div>
<div class="form-group">
     <label for="exampleInputEmail1">Prenom:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="prenom" value="{{old('prenom')?? $client->prenom}}"  >
        @error('prenom')
    <p class="text-danger">{{$message}}}</p>

    @enderror
 </div>
 <div class="form-group">
    <label for="exampleInputEmail1">Adresse:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="adresse" value="{{old('adresse')?? $client->adresse}}">
    @error('adresse')
    <p class="text-danger">{{$message}}}</p>

    @enderror
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Date Naissance:</label>
    <input type="Date" class="form-control" id="exampleInputEmail1" name="datNaissance" value="{{old('datNaissance')?? $client->datNaissance}}">
    @error('datNaissance')
    <p class="text-danger">{{$message}}}</p>

    @enderror
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Telephone:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="Tel" value="{{old('Tel')?? $client->Tel}}">
    @error('Tel')
    <p class="text-danger">{{$message}}}</p>

    @enderror
</div>



  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-primary">Anuler</button>
