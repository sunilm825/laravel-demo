@include('header')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><b>Update </b></h2>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('category.update', $categoryeditdata->id) }}" style="width: 50%" method="POST">
            @csrf
            @method('PUT')
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter name" value="{{ $categoryeditdata->name }}" name="name"
                id="name">
           
            <button type="submit" class="registerbtn">Update</button>
    </div>
    </form>
</div>
</div>

@include('footer')
