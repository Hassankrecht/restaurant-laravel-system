@extends('layouts.admin')
@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4 d-inline">Foods</h5>
                        <a href="{{ route('admin.foods.create') }}"
                            class="btn btn-primary mb-4 text-center float-right">Create Foods</a>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">name</th>
                                    <th scope="col">image</th>
                                    <th scope="col">category</th>
                                    <th scope="col">description</th>
                                    <th scope="col">price</th>
                                    <th scope="col">delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($foods as $index => $food)
                                    @csrf
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $food->name }}</td>
                                        <td><img src="{{ asset('img/' . $food->image . '') }}" alt="{{ $food->name }}"
                                                width="50">

                                        </td>
                                        <td>{{ $food->category }}</td>
                                        <td>{{ $food->description }}</td>
                                        <td>${{ $food->price }}</td>
                                        <td>
                                            <button class="btn btn-warning"><a
                                                    href="{{ route('admin.foods.edit', $food->id) }}"
                                                    class="text-white">Edit</a></button>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.foods.delete', $food->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf

                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure?')">delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <script type="text/javascript"></script>
@endsection
