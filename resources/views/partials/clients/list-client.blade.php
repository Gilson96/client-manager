<a href="/api/clients {{ $client->id }}" class="list-group-item list-group-item-action">

    <div class="d-flex w-100 justify-content-between">

        <h5 class="mb-1">
            {{ $client->first_name }}
            {{ $client->last_name }}
        </h5>

    </div>

    <p class="mb-1">{{ $client->toggleMode() }}</p>
</a>
