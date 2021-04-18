<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>

<body class="antialiased">
    <div class="list-group">
         {{-- loop over all of the articles  --}}
        {{-- each article object goes into $article  --}}
        @foreach (App\Models\Client::all() as $client)
            <a href="/clients/{{ $client->id }}" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    {{-- output the article title  --}}
                    <h5 class="mb-1">{{ $client->first_name }}</h5>

                </div>

            </a>
        @endforeach
    </div>

</body>

</html>
