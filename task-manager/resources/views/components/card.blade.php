<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">{{ $title }}</h5>
    <p class="card-text">{{ $description }}</p>
    <a href="/tasks/{{ $id }}/edit" class="btn btn-primary">Edit</a>

    <form action="/tasks/{{ $id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
  </div>

  <div class="card-footer text-body-secondary">
   {{ $created_at }}
  </div>

</div>