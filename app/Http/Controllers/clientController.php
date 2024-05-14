<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController
{
  
  private $columns=['ClientName','phone','email','website'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $clients = Client::get();
     return view ('Clients',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addClient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $client = new Client();
       $client->ClientName = 'Egypt Air';
       $client->phone = '01099041481';
       $client->email = 'EgyptAir@gmail.com';
       $client->website = 'https://EgyptAir.com';
       $client-> save();
       Client::create($request->only($this->columns));
       return redirect('Clients');//
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::findOrFail($id);
    return view('showClient',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)

    {
      $client = Client::findOrFail($id);
    return view('editClient',compact('client'));
       // return view("editClient"); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      Client::where ('id',$id)->update($request->only($this->columns));
      return redirect('Clients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
     $id = $request->id;
     Client::where ('id',$id)->delete();
     return redirect('Clients');
        }
}
