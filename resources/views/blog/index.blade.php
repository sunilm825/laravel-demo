@include('header')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="">
                <h2 style="float: left;"><b>Blog List</b></h2>
                <a href="{{ route('blog.create') }}" style="float: right;"
                    class="w3-button w3-green">Create Blog</a>
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
                <th>Description</th>
                <th>Category</th>
                <th>Author</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>

            
            
            @foreach ($blogs as $blog)
                {{-- @dd($blog,$blog->userList) --}}
                {{-- {{ dd($blog) }} --}}

{{-- {{ dd($id ) }} --}}
{{-- {{ $blog->user_id }} --}}

                {{-- @if ($blog->user_id == Auth::user()->id) --}}
                    
                <tr>

                    <td>{{ $rank++ }}</td>
                    <td>{{ $blog->name }}</td>
                    <td>{{ $blog->description }}</td>
                    <td>{{ $blog->categoryId->name }}</td>
                    <td>{{ $blog->userId->name }}</td>
                    <td>{{ $blog->created_at }}</td>
                    <td class="action">
                        <a class="btn btn-primary" href="{{ route('blog.edit', $blog->id) }}">Edit</a>
                        <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger del" id="delete_product">Delete</button>
                        </form>

                    </td>

                </tr> 
                
                {{-- @endif --}}
               
            @endforeach
            
        </table>
        {{ $blogs->links() }}
    </div>
</div>


@include('footer')
