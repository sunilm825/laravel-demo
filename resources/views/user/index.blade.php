@include('header')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <h2><b>User List</b></h2>

                <a href="{{ route('user.create') }}" style="float: right;" class="w3-button w3-green">Create User</a>

            </div>
            @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
        </div>
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            @foreach ($users as $user)
                <tr>

                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td class="action">
                        <a class="btn btn-primary" href="{{ route('user.edit', $user->id) }}">Edit</a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger del" id="delete_product">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach 
        </table>
    </div>
</div>


@include('footer')
