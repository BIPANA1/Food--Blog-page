@extends('layout.main')
@section('content')
        

    <table>
        <tr>
            <th>Title</th>
            <th>Image</th>
            <th>Cover Image</th>
            <th>Postal Date</th>
            <th>Author</th>
            <th>Action</th>
        </tr>
      @foreach($auths as $auth)
        <tr>
            <td>{{$auth->title}}</td>
            <td>
                <img src="{{asset($auth->Image)}}" alt="Image" height="50px" width="50px">
            </td>
            <td>
            <img src="{{asset($auth->coverImage)}}" alt="Image" height="50px" width="50px">
            </td>
            <td>{{$auth->postalDate}}</td>
            <td>{{$auth->author}}</td>
          
            <div class="btn-attach">
            <td class=btn-0>
                <button class="btn-1"> <a href="/edit/{{$auth->id}}"> Edit </a> </button>
                <button class="btn-2"> <a href="/delete-blog/{{$auth->id}}"> Delete </a> </button>
            </td>
            </div>
        </tr>
        @endforeach

    </table>

    <button class="add-btn"><a href="/addItem"> Add new items </a> </button>



@endsection