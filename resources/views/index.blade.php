<!DOCTYPE html>
<html>
<head>
    <title>Blog Posts</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">All Blog Posts</h1>
        <a href="{{route('posts.create')}}" class="btn btn-primary mb-3">Create New Post</a>
        @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <div class="list-group">
             @foreach ($posts as $post)
                <div class="list-group-item">
                    <h5 class="mb-1">{{ $post->title }}</h5>
                    <a href="{{ route('posts.view', $post->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                  <form action="{{ route('posts.delete', $post->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this item?')">
                     @csrf
                    @method('DELETE')
                   <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                  </form>

                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
