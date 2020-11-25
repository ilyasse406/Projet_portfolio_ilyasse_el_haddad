@extends('templates.structure2')

@section('content2')
<div class="container">
    <form action="{{ route("user.store") }}" method="POST">
        @csrf
        
        
        
        <div class="form-group">
          <label for="exampleInputPassword1">Birthday</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="birthday">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Website</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="website">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">phone</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="phone">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">city</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="city">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">age</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="age">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">degree</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="degree">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">E-mail</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Freelance</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="freelance">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Image</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="image">
        </div>
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

    
@endsection