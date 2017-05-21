@extends('layouts.master')

@section('content')
  <h2>Post</h2>
  <table class="table table-striped" >
    <tr>
      <th>
        Title
      </th>
    </tr>

      @foreach($posts as $post)
        <tr>
          <td>
            {{$post->title}}
          </td>
        </tr>
      @endforeach
    </table>
@endsection
