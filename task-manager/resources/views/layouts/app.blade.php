<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body> 
    {{-- <x-alert type="success" massage="Well done!" class="m-4"/>
    <x-alert type="danger" massage="Wrong"/>
    <x-alert type="info" massage="Information About!"/>
    <x-alert type="warning" massage="Warning!"/> --}}

    <div class="container">
            @yield('tasks')
    </div>
    
    @yield('create_post')
    @yield('all_posts')
    @yield('edit_post')


{{-- <form method="POST" action="#">
    @csrf
    @method('PUT')
    <label for="title">Post Title</label>
 
    <input
        id="title"
        type="text"
        class="@error('title') is-invalid @enderror"
    />

    <button type="submit"> submit</button>
    
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</form> --}}



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>