@extends('admin.index')

@section('title', 'Янгиликлар')

@section('content_header')
    <h4>Янгиликлар Show</h4>
@stop

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <h3>Name: {{ $user->name }}</h3>
                    <h4>Email: {{ $user->email }}</h4>
                    <h4>Number of Posts ....</h4>
                </h3>
            </div>
            <div class="card-body">
                <h5 class="card-title">Role</h5>
                <p class="card-text">
                    @if($user->roles->isNotEmpty())
                        @foreach($user->roles as $role)
                            <span class="badge badge-primary">
                            {{ $role->name }}
                            </span>
                        @endforeach
                    @endif
                </p>
                <h5 class="card-title">Permissions</h5>
                <p class="card-text">
                    @if($user->roles->isNotEmpty())
                        @foreach($user->permissions as $permission)
                            <span class="badge badge-success">
                                {{ $permission->name }}
                            </span>
                        @endforeach
                    @endif
                </p>
            </div>
            <div class="card-footer">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    </div>
@endsection






