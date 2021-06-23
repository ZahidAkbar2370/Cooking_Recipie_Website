<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /*
        fetching User and send to view User blade
    */
    public function index()
    {
        $all_users = User::all();

        return view("Admin/User/view_user",["all_users" => $all_users]);
    }

    /*
        Open add new User blade
    */
    public function create()
    {
        return view("Admin/User/add_user");
    }


    /*
        insert new User into User database table
    */
    public function store(Request $request)
    {
        $add_user = User::create([

            'name' => $request->name,
            'email' => $request->email,
            'mobile_no' => $request->mobile_no,
            'address' => $request->address,
            'password' => $request->password,
            'publication_status' => "0",

        ]);

        return redirect("admin-view-user");
    }

    /*
        fetch selected data from User through id
    */
    public function edit($id)
    {
        $edit_user = User::find($id);

        return view("Admin/User/edit_user",["edit_user" => $edit_user]);
    }


    /*
        Update data of User through id
    */
    public function update(Request $request,$id)
    {
        $update_user = User::find($id);

        $update_user->name = $request->name;
        $update_user->email = $request->email;
        $update_user->password = $request->password;
        $update_user->mobile_no = $request->mobile_no;
        $update_user->address = $request->address;

        $update_user->update();

        return redirect("admin-view-user");

    }

    /*
        Delete selected User through id
    */
    public function destroy($id)
    {
        $delete_user = User::find($id)->delete();

        return redirect("admin-view-user");
    }

    /*
        unapprove mean change publication status through id
    */
    public function unapprove($id)
    {
        $update_status = User::find($id);

        $update_status->publication_status = "0";

        $update_status->update();

        return redirect("admin-view-user");
    }


    /*
        approve mean change publication status through id
    */
    public function approve($id)
    {
        $update_status = User::find($id);

        $update_status->publication_status = "1";

        $update_status->update();

        return redirect("admin-view-user");
    }
}
