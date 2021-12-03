<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function home()
    {
        $card=Card::all();
        return view('welcome',compact('card'));
    }
    public function index()
    {
        $card=Card::all();
        return view('card.index',compact('card'));
    }

    public function create($id=null)
    {
        if ($id != null) {
            $type='edit';
        }
        $type='add';
        $card=Card::find($id);
        return view('card.edit-add',compact('card','type'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'person_name' => 'required',
            'email' => 'required|email',
            'contacts' => 'required|digits:10',
            'short_description' => 'required|max:115',
            'single_address' => 'required',
        ]);
        
        $input = $request->all();
        $card=Card::find($request->card_id);
        if(!isset($card))
        {
            $card=new Card;
        }
        $card->person_name=$request->person_name;
        $card->email=$request->email;
        $card->contacts=$request->contacts;
        $card->short_description=$request->short_description;
        $card->single_address=$request->single_address;
        $card->save();
        return response()->json(['success'=>true]);
    }

    public function destroy($id)
    {
        Card::find($id)->delete();
        return redirect()->back()->with(['status'=>true]);
    }
}
