<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Clients;

/*

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/


// all of the routes are in the /clients end-point
Route::group([
    "prefix" => "clients",
   // "middleware" => ["auth:api"],
], function () {

    // GET /clients: show all clients
    Route::get("", [Clients::class, "index"]);//->middleware('auth:api');

    // POST /clients: create a new client
    Route::post("", [Clients::class, "store"]);

    // all these routes also have an person ID in the
    // end-point, e.g. /client/8
    Route::group(["prefix" => "{clients}"], function () {

        // GET /client/8: show the client
        Route::get("", [Clients::class, "show"]);
        // PUT /client/8: update the client
        Route::put("", [Clients::class, "update"]);
        // DELETE /client/8: delete the client
        Route::delete("", [Clients::class, "destroy"]);
    });
});