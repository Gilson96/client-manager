<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<title>My Amazing Blog</title>
</head>
<body>
    <div class="list-group">

         {{-- loop over all of the clients  --}}
         {{-- each article object goes into $client  --}}
        @foreach (App\Models\Client::all() as $client)
            <a href="/api/clients/{{ $client->id }}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                     {{-- output the client first and last name  --}}
                    <h5 class="mb-1">
                        {{ $client->first_name }}
                        {{ $client->last_name }}
                    </h5>
            </a>
        @endforeach
    </div>
</body>
</html>
