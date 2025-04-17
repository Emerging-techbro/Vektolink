<?php

namespace App\Http\Controllers;
use App\Models\ClientModel;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function  client(){
        $client=ClientModel::all();
        return view('client',compact('client'));
    }

         //adding of the addclient
         public function add_client(Request $request){
        $client = new ClientModel;
 
        $client->client_name=$request->input('client_name');
        $client->client_number=$request->input('client_number');
        $client->client_location=$request->input('client_location');
        $client->save();
 
        return redirect()->back()->with('status','Client Successful');
     }


        //method for the editing
    public function edit_client($id) {
        $client= ClientModel::find($id);
        return view('edit_client',compact('client'));
    }

    //method for updating after editing
    public function update_client($id, Request $request) {
        $client= ClientModel::find($id);

       $client->client_name=$request->input('client_name');
       $client->client_number=$request->input('client_number');
       $client->client_location=$request->input('client_location');

       $client->update();

       return redirect('/client');

    }

    }