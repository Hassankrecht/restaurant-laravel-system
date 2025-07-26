@extends('layouts.admin')
@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4 d-inline">Bookings</h5>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">name</th>
                                    <th scope="col">email</th>
                                    <th scope="col">date_booking</th>
                                    <th scope="col">num_people</th>
                                    <th scope="col">special_request</th>
                                    <th scope="col">status</th>
                                    <th scope="col">created_at</th>
                                    <th scope="col">delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $index => $booking)
                                    @csrf
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $booking->name }}</td>
                                        <td>{{ $booking->email }}</td>
                                        <td>{{ $booking->date_time }}</td>
                                        <td>{{ $booking->people_count }}</td>
                                        <td>{{ $booking->message }}</td>
                                        <td>{{ $booking->status }}</td>
                                        <td>{{ $booking->created_at }}</td>

                                        <td>
                                            <form action="{{ route('admin.bookings.delete', $booking->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf

                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure?')">delete</button>
                                        </form>
                                    </td>
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
