@extends("app")
@section('content')
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
@endsection
