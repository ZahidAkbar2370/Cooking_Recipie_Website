<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    /*
        fetching Message and send to view Message blade
    */
    public function index()
    {
        $all_messages = Message::all();

        return view("Admin/Message/view_message", ["all_messages" => $all_messages]);
    }

    /*
        Delete selected Message through id
    */
    public function destroy($id)
    {
        $delete_message = Message::find($id)->delete();

        return redirect("admin-view-message");
    }
}
