<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
  {
    return view('index');
  }

    public function confirm(ContactRequest $request)
  {
    $contact = $request->only(['last_name','first_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'tel','address','building','inquiry_type','content']);
    return view('confirm', compact('contact'));
  }

    public function thanks(ContactRequest $request)
  {
     $contact = $request->only(['last_name','first_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'tel','address','building','inquiry_type','content']);
     return view('thanks');
  }

  public function store(Request $request)
{
    Contact::create($request->all());

    return redirect()->route('thanks'); // 送信完了ページへ
}
}
