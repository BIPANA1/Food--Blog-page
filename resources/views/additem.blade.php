@extends('layout.main')
@section('content')

    <form class="form-add" action="/create" method="post" enctype="multipart/form-data">
        @csrf

        <h2>Add Your Favourite Items</h2>
        <div>
            <label> Title </label>
            <input type="text" name="title" placeholder="Title" />
        </div>
        <div>
            <input type="file" name="Image"  />
        </div>
        <div>
            <input type="file" name="coverImage" />
        </div>
        <div>
            <label>Postal date</label>
            <input type="date" name="postalDate">
        </div>

        <div>
            <label> Author </label>
            <input type="text" name="author" placeholder="Author name" />

        </div>
        <div>
            <input type="submit" value="Add Item">
        </div>

    </form>
@endsection