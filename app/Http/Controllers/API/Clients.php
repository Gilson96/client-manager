<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\API\ClientRequest;
use App\Http\Resources\API\ClientResource;

class Clients extends Controller
{
    
    public function index()
    {
        return Client::all();

    }

   
    public function store(ClientRequest $request)
    {
        // get all the request data
        // returns an array of all the data the user sent
        $data = $request->all();
        
        // create client with data and store in DB
        // and return it as JSON
        // automatically gets 201 status as it's a POST request
        // store client in variable
        $client = Client::create($data);

        //return the resource
        return new ClientResource($client);
    }

    
    public function show(Client $client)
    {
        // return the resource
        return new ClientResource($client);
    }

    
    public function update(ClientRequest $request, Client $client)
    {
        $client = Client::find($id);

        // get the request data
        $data = $request->all();

        // update the client using the fill method
        // then save it to the database
        $client->fill($data)->save();
        
        // return the updated version
        return new ClientResource($client);
    }

    
    public function destroy(Client $client)
    {
          // delete Client from DB
          $client->delete();

          // use a 204 code as there is no content in response
          return response(null, 204);
    }
}
