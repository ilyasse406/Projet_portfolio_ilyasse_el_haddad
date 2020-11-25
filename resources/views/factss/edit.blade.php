@extends('templates.structure2')

@section('content2')
<div class="container">
    <form action="/facts/{{ $fact->id }}" method="POST">
        @csrf
        @method("put")
        
        <div class="form-group">
          <label for="exampleInputEmail1">Nombre de client content</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="client" value="{{ $fact->client }}">
          
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Projets effectués</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="project" value="{{ $fact->project }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Heures présté</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="support" value="{{ $fact->support }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Bosseur</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="hard" value="{{ $fact->hard }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

    
@endsection