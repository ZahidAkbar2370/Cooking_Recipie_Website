<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategorey;

class SubCategoryController extends Controller
{
    /*
        fetching sub categorey and send to view sub categorey blade
    */
    public function index()
    {
        $all_sub_categories = SubCategorey::all();

        return view("Admin/SubCategorey/view_sub_categorey",["all_sub_categories" => $all_sub_categories]);
    }

    /*
        open add subcategorey blade
    */
    public function create()
    {
        return view("Admin/SubCategorey/add_sub_categorey");
    }

    /*
        insert new SubCategorey into SubCategorey database table
    */
    public function store(Request $request)
    {
        $add_sub_categorey = SubCategorey::create([

            'sub_categorey_name' => $request->sub_categorey_name,
            'publication_status' => "0",
        ]);

        return redirect("admin-view-sub-categorey");
    }

    /*
        Delete selected SubCategorey through id
    */
    public function destroy($id)
    {
        $delete_sub_categorey = SubCategorey::find($id)->delete();

        return redirect("admin-view-sub-categorey");
    }

    /*
        fetch selected data from SubCategorey through id
    */
    public function edit($id)
    {
        $edit_sub_categorey = SubCategorey::find($id);

        return view("Admin/SubCategorey/edit_sub_categorey",["edit_sub_categorey" => $edit_sub_categorey]);
    }


    /*
        Update data of SubCategorey through id
    */
    public function update(Request $request,$id)
    {
        $update_sub_categorey = SubCategorey::find($id);

        $update_sub_categorey->sub_categorey_name = $request->sub_categorey_name;

        $update_sub_categorey->update();

        return redirect("admin-view-sub-categorey");

    }


    /*
        unapprove mean change publication status through id
    */
    public function unapprove($id)
    {
        $update_status = SubCategorey::find($id);

        $update_status->publication_status = "0";

        $update_status->update();

        return redirect("admin-view-sub-categorey");
    }


    /*
        approve mean change publication status through id
    */
    public function approve($id)
    {
        $update_status = SubCategorey::find($id);

        $update_status->publication_status = "1";

        $update_status->update();

        return redirect("admin-view-sub-categorey");
    }
}
