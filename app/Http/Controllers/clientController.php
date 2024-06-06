<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Traits\uploadfile;

use function Laravel\Prompts\select;

class ClientController
{
  use uploadfile;
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
     
      $messages=$this->errMsg();
      $data = $request->validate([
        'ClientName'=>'required|max:100|min:5',
        'phone'=>'required|min:11',
        'email'=>'required|email:rfc',
        'website'=>'required',
        'city'=>'required|max:30' ,'image'=>'required',] ,$messages);
        $fileName = $this->upload($request->image,'assets/images');
        // $imgExt = $request->image->getClientOriginalExtension();
        // $fileName = time() .'.' . $imgExt;
        // $path='assets/images';
        // $request->image->move($path,$fileName);
        $data['image']=$fileName;
      $data['active']=isset($request->active);
      Client::create($data);
      return redirect('Clients');
  }

  public function errMsg(){
    return[
      'ClientName.required'=>'The client name is missed,please insert' ,
      'ClientName.min'=> 'length less than 5 , please insert more chars',


  ];
  
} 
   
      //  $client = new Client();
      //  $client->ClientName = 'Egypt Air';
      //  $client->phone = '01099041481';
      //  $client->email = 'EgyptAir@gmail.com';
      //  $client->website = 'https://EgyptAir.com';
      //  $client-> save();
      // Client::create($request->only($this->columns));
     
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
     
      $client = Client::findOrFail ($id);
      
    // $options = Client::pulck('city','id');
    // $selectedOption=old('city', $client->city);

  $option= old('city', '$cleint->city');

    return view('city', compact($option));
       // return view("editClient"); 
    }

    public function update(Request $request, string $id)
    {
      // $messages=$this->errMsg();
      // $data = $request->validate([
      //     'clientName' => 'required|max:100|min:5',
      //     'phone' => 'required|min:11',
      //     'email' => 'required|email:rfc',
      //     'website' => 'required',
      //     'city' => 'required|max:30',
      //     'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',], $messages);
      //     $client = Client::findOrFail($id);
          if ($request->hasFile('image')) {

//      $fileName = time() . '.' . $imgExt;
      // $path = 'assets/images';
      // $request->image->move($path, $fileName);
      // $data['image'] = $fileName;}
      // else{
      //   $data['image']=$client->image;
      // }
      $data['active'] = isset($request->active);
      Client::where ('id',$id)->update($request->$data);
      return redirect('Clients');
    }
  }
    
    public function trash ()
    {
      $trashed =  Client::onlyTrashed()->get();
  
      return view('trashClient',compact('trashed'));
    }
// restore
    public function restore (string $id)
    {
      Client:: where ('id',$id)->restore();
      return redirect('Clients');
    }
    
    public function destroy(Request $request)
    {
     $id = $request->id;
     Client::where ('id',$id)->delete();
     return redirect('Clients');
        }
//forcedelete
        public function forceDelete(Request $request)
        {
         $id = $request->id;
         Client::where ('id',$id)->forceDelete();
         return redirect('trashClient');
            }
            
}
