<div class="col-md-4 mb-4">
        <div class="card shadow-sm">
            {{-- <h1>{{ $id }}</h1> --}}
            <img src="{{ asset('storage/' . $img) }}" class="card-img-top" style="height:400px; object-fit:cover;">

            <div class="card-body">
                <h5 class="card-title">{{ $name }}</h5>
                <h6 class="text-success">₹{{ $price }}</h6>

                <p class="card-text">
                    {{ $detail }}
                </p>

                <div class="d-flex justify-content-between">
                    <a href="/products/{{ $id }}/edit" class="btn btn-primary btn-sm">Edit</a>

                    <form action="/products/{{ $id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>

        </div>
    </div>