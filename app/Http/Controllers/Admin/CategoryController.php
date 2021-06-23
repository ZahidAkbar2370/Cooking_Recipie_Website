<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorey;

class CategoryController extends Controller
{
    /*
        fetching categorey and send to view categorey blade
    */
    public function index()
    {
        $all_categories = Categorey::all();

        return view("Admin/Categorey/view_categorey", ["all_categories" => $all_categories]);
    }

     /*
        open add categorey blade
    */
    public function create()
    {
        return view("Admin/Categorey/add_categorey");
    }

    /*
        insert new Categorey into Categorey database table
    */
    public function store(Request $request)
    {
        $add_categorey = Categorey::create([

            'categorey_name' => $request->categorey_name,
            'publication_status' => "0",
        ]);

        return redirect("admin-view-categorey");
    }


    /*
        Delete selected Categorey through id
    */
    public function destroy($id)
    {
        $delete_categorey = Categorey::find($id)->delete();

        return redirect("admin-view-categorey");
    }


    /*
        fetch selected data from Categorey through id
    */
    public function edit($id)
    {
        $edit_categorey = Categorey::find($id);

        return view("Admin/Categorey/edit_categorey",["edit_categorey" => $edit_categorey]);
    }


    /*
        Update data of Categorey through id
    */
    public function update(Request $request,$id)
    {
        $update_categorey = Categorey::find($id);

        $update_categorey->categorey_name = $request->categorey_name;

        $update_categorey->update();

        return redirect("admin-view-categorey");

    }


    /*
        unapprove mean change publication status through id
    */
    public function unapprove($id)
    {
        $update_status = Categorey::find($id);

        $update_status->publication_status = "0";

        $update_status->update();

        return redirect("admin-view-categorey");
    }


    /*
        approve mean change publication status through id
    */
    public function approve($id)
    {
        $update_status = Categorey::find($id);

        $update_status->publication_status = "1";

        $update_status->update();

        return redirect("admin-view-categorey");
    }
}
