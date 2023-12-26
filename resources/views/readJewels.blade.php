<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Jewels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div style="margin-left: 50px">
        <x-navbar/>

        <div class="d-flex">
            @forelse ($jewels as $jewel)
                <div class="card" style="width: 18rem; margin: 10px">
                    <h1>{{ $jewel->Name }}</h1>
                    <h2>{{ $jewel->Gram }}</h2>
                    <h2>{{ $jewel->Color }}</h2>
                    <img src="{{ $jewel->Image }}" alt="{{ $jewel->Image }}">
                    <div style="display: flex; justify-content: space-around; margin: 20px">
                        <a href="/edit-jewel/{{ $jewel->id }}"><button class="btn btn-primary">Edit</button></a>
                        <form action="/delete-jewel/{{ $jewel->id }}" method="POST">
                            @csrf 
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
                <br><br>
            @empty
                <p>Data is empty.</p>
            @endforelse
        </div>
        <br><br>
        <div class="d-flex justify-content-center">
            {{ $jewels->onEachSide(1)->links() }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>