@include('header')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <h2><b>Category List</b></h2>

                <a href="{{ route('category.create') }}" style="float: right;" class="w3-button w3-green">Create Category</a>
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
                <th>Action</th>
            </tr>
            @foreach ($categories as $category)
                <tr>

                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td class="action">
                        <a class="btn btn-primary" href="{{ route('category.edit', $category->id) }}">Edit</a>
                        <form action="{{ route('category.destroy', $category->id) }}" method="POST">
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
