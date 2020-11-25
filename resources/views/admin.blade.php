@extends('templates.structure2')


@section('content2')

    


    {{-- USER --}}
    <section id="user-table">
        <div class="container">
          <div class="mb-5 text-center">
            <h1>Nos Utilisateurs</h1>
            <a class="btn btn-primary" href="{{ route("user.create") }}">Create</a>

          </div>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Website</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">City</th>
                    <th scope="col">Age</th>
                    <th scope="col">Degree</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Freelance</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($users as $e)

                    <tr>
                      <th scope="row">{{ $e->id }}</th>
                      <td>{{ $e->birthday }}</td>
                      <td>{{ $e->website }}</td>
                      <td>{{ $e->phone }}</td>
                      <td>{{ $e->city }}</td>
                      <td>{{ $e->age }}</td>
                      <td>{{ $e->degree }}</td>
                      <td>{{ $e->email }}</td>
                      <td>{{ $e->freelance }}</td>
                      <td><img src="{{ asset("img/$e->image") }}" alt=""></td>
                      <td class="d-flex">
                        <a class="btn btn-success" href="/user/{{ $e->id }}/edit">edit</a>
                        
                        <form action="/user/{{ $e->id }}" method="post">
                          @csrf
                          @method("delete")
                          <button class="btn btn-danger ml-2"  type="submit">Delete</button>

                        </form>
                      </td>
                    </tr>
                        
                    @endforeach

                  
                </tbody>
              </table>

        </div>
    </section>
    {{-- USER --}}

    {{-- FACT --}}
    <section id="user-table">
        <div class="container">
          <div class="mb-5 text-center">
            <h1>Nos Facts</h1>
            <a class="btn btn-primary" href="{{ route("facts.create") }}">Create</a>

          </div>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">client</th>
                    <th scope="col">Projet</th>
                    <th scope="col">Heure</th>
                    <th scope="col">Bosseur</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($facts as $e)

                    <tr>
                      <th scope="row">{{ $e->id }}</th>
                      <td>{{ $e->client }}</td>
                      <td>{{ $e->project }}</td>
                      <td>{{ $e->support }}</td>
                      <td>{{ $e->hard }}</td>
                      
                      <td class="d-flex">
                        <a class="btn btn-success" href="/facts/{{ $e->id }}/edit">edit</a>
                        <form action="/facts/{{ $e->id }}" method="POST" class="ml-2">
                          @csrf
                          @method("delete")
                          <button type="submit" class="btn btn-danger ">delete</button>
                        </form>
                      </td>
                    </tr>
                        
                    @endforeach

                  
                </tbody>
              </table>

        </div>
    </section>
    {{-- Fact --}}














































































@endsection

