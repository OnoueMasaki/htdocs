@extends('layouts.admin')
@section('title', 'SNS')
<!-- 以下、コンテンツ -->
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h3>ホーム</h3>
                <form action="{{ action('Admin\SnsController@create') }}" method="post" enctype="multipart/form-data" class="form">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="body"></label>
                        <div class="col-md-10">
                            <input type="text" placeholder="いまどうしてる？" class="form-control" name="body" value="{{ old('body') }}">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="つぶやく">
                </form>
                @foreach($posts as $post)
                            <table>
                                <tr>
                                    <td>{{ $post->user->name }}</td>
                                    <td>{{ ($post->body) }}</td>
                                    <td>{{ ($post->created_at) }}</td>
                                    <td>
                                    @if($post->user_id == Auth::id())
                                        <div class="delete">
                                            <a href="{{ action('Admin\SnsController@delete', ['id' => $post->id]) }}">削除</a>
                                        </div>
                                    @endif
                                    </td>
                                </tr>
                            </table>
                @endforeach
            </div>
        </div>
    </div>
@endsection