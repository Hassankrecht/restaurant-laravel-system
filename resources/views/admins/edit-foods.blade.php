@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-5 d-inline">Create Food Items</h5>
                        <form method="POST" action="{{ route('admin.foods.update', $food->id) }}" enctype="multipart/form-data">
                            @csrf
                             @method('PUT')
                            <!-- Email input -->
                            <div class="form-outline mb-4 mt-4">
                                <input type="text" name="name" id="form2Example1" class="form-control"
                                    placeholder="name" value="{{ $food->name }}" />

                            </div>
                            <div class="form-outline mb-4 mt-4">
                                <input type="text" name="price" id="form2Example1" class="form-control"
                                    placeholder="price" value="{{ $food->price }}" />

                            </div>
                            <div class="form-outline mb-4 mt-4">
                                <input type="file" name="image" id="form2Example1" class="form-control"  />

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ $food->description }}</textarea>
                            </div>

                            <div class="form-outline mb-4 mt-4">

                                <select name="category" class="form-select  form-control"
                                    aria-label="Default select example">
                                    <option selected>Choose Meal</option>
                                    <option value="breakfast">Breakfast</option>
                                    <option value="launch">Launch</option>
                                    <option value="dinner">Dinner</option>
                                </select>
                            </div>

                            <br>



                            <!-- Submit button -->
                            <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">update</button>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript"></script>
@endsection
