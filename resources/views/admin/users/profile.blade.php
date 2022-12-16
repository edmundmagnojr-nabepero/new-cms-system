<x-admin-master>
    @section('content')
        <h1>User Profile of {{$user->name}}</h1>

        <div class="row">
            <div class="col-sm-6">
                <form action="post" action="{{route('user.profile.update', $user->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <img height="40px" width="40px" class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                    </div>
                    <div class="form-group">
                        <input type="file" name="avatar" id="avatar">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input  type="text"
                                name="username"
                                class="form-control" 
                                id="username"
                                value="{{$user->username}}">
                        @error('username')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input  type="text"
                                name="name"
                                class="form-control" 
                                id="name"
                                value="{{$user->name}}">
                        @error('username')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input  type="email"
                                name="email"
                                class="form-control" 
                                id="email"
                                value="{{$user->email}}">
                        @error('username')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input  type="password"
                                name="password"
                                class="form-control" 
                                id="password">
                        @error('username')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password-confirmation">Confirm Password</label>
                        <input  type="password"
                                name="password_confimation"
                                class="form-control" 
                                id="password-confirmation">
                        @error('username')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    @endsection
</x-admin-master>