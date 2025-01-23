<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index(){
        $contacts = Contact::all();
        return view('site.contact', compact('contacts'));
    }

    public function destroy($id){
        $contacts = Contact::findOrFail($id);
        $contacts->delete();

        return redirect()->route('admin.contacts.index')->with('success','Contact Deleted Successfully');
    }
}
