@extends('layouts.master')

@section('content')
  <h2>Post</h2>
  <table class="table table-striped" >
    <tr>
      <th>
        Title
      </th>
      <th>
        &nbsp;
      </th>
    </tr>

      @foreach($posts as $post)
        <tr>
          <td>
            {{$post->title}}            
          </td>
          <td>
            {{ link_to_route('posts.edit', 'Edit', array($post->id)) }}
          </td>
        </tr>
      @endforeach
    </table>
@endsection
