@extends('templates.structure2')

@section('content2')
    

    <div class="container">
        <form action="{{ route("facts.store") }}" method="POST">
            @csrf
            
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre de client content</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="client">
              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Projets effectués</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="project">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Heures présté</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="support">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Bosseur</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="hard">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

    
@endsection