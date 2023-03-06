@include('header')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><b>Create Category </b></h2>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('category.store') }}" style="width: 50%" method="POST">
            @csrf
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter name" name="name" id="name">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <br>
            <button type="submit" class="registerbtn">Create</button>
    </div>
    </form>
</div>
</div>

@include('footer')
