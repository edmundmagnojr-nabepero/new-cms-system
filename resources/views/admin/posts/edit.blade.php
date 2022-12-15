<x-admin-master>
    @section('content')
    <h1>Edit Post</h1>

    <form method="post" action="{{route('post.update', $post->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title">Title</label>
            <input  type="text"
                    name="title" 
                    class="form-control" 
                    id="title" 
                    aria-describedby="" 
                    placeholder="Enter Title"
                    value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="file">File</label>
            <div><img src="{{asset($post->post_image)}}" height="40px" alt=""></div>
            <input  type="file" 
                    name="post_image" 
                    class="form-control" 
                    id="post_image">
        </div>
        <div class="form-group">
            <textarea   name="body" 
                        id="body" 
                        cols="30" 
                        rows="10" 
                        class="form-control">{{$post->body}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
</x-admin-master>