@extends("app")
@section("content")
<div class="list-group">

    @foreach (App\Models\Client::all() as $client)
        <a href="/clients/{{ $client->id }}"> --}}

            @include("partials/clients/list-client", ["client" => $client])

        </a>
    @endforeach

</div>
@endsection

</html>
