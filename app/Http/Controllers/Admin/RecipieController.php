<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipie;
use App\Models\Categorey;
use App\Models\SubCategorey;
use DB;

class RecipieController extends Controller
{
    /*
        fetching recipie and categorey sub categorey send to view recipie blade
    */
    public function index()
    {
        $all_recipies = DB::table('recipies')
        ->join('categoreies', 'categoreies.id', '=', 'recipies.categorey_id')
        ->join('sub_categoreies', 'sub_categoreies.id', '=', 'recipies.sub_categorey_id')
        ->select('recipies.id as recipieID','categoreies.categorey_name','sub_categoreies.sub_categorey_name','recipies.*')
        ->get();
        
        return view("Admin/Recipie/view_recipie", ["all_recipies" => $all_recipies]);
    }

    /*
        fetch categorey,sub categorey send to Add recipie blade
    */
    public function create()
    {
        $all_categorey = Categorey::all();

        $all_sub_categorey = SubCategorey::all();

        return view("Admin/Recipie/add_recipie",["all_categorey" => $all_categorey , "all_sub_categorey" => $all_sub_categorey]);
    }

    /*
        insert new recipie into recipie database table
    */ 
    public function store(Request $request)
    {
        $ad_recipie = Recipie::create([
            'user_id' => "1",
            'categorey_id' => $request->categorey_name,
            'sub_categorey_id' => $request->sub_categorey_name,
            'recipie_name' => $request->recipie_name,
            'time_required' => $request->required_time,
            'description' => $request->description,
            'publication_status' => "0",
        ]);

        return redirect("admin-view-recipie");
    }



    /*
        Delete selected recipie through id
    */ 
    public function destroy($id)
    {
        $delete_recipie = Recipie::find($id)->delete();

        return redirect("admin-view-recipie");
    }

    
    /*
        fetch selected data from Recipie through id
    */ 
    public function edit($id)
    {

        $all_categorey = Categorey::all();

        $all_sub_categorey = SubCategorey::all();

        $edit_recipie = Recipie::find($id);

        return view("Admin/Recipie/edit_recipie",["edit_recipie" => $edit_recipie, "all_categorey" => $all_categorey , "all_sub_categorey" => $all_sub_categorey]);
    }


    /*
        Update data of Recipie through id
    */     
    public function update(Request $request,$id)
    {
       $update_recipie = Recipie::find($id);

       $update_recipie->recipie_name = $request->recipie_name;
       $update_recipie->categorey_id = $request->categorey_name;
       $update_recipie->sub_categorey_id = $request->sub_categorey_name;
       $update_recipie->time_required = $request->required_time;
       $update_recipie->description = $request->description;

       $update_recipie->update();

       return redirect("admin-view-recipie");
    }


    /*
        unapprove mean change publication status through id
    */ 
    public function unapprove($id)
    {
        $update_status = Recipie::find($id);

        $update_status->publication_status = "0";

        $update_status->update();

        return redirect("admin-view-recipie");
    }


    /*
        approve mean change publication status through id
    */
    public function approve($id)
    {
        $update_status = Recipie::find($id);

        $update_status->publication_status = "1";

        $update_status->update();

        return redirect("admin-view-recipie");
    }
}
