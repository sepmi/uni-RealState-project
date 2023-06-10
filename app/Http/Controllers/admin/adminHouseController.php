<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class adminHouseController extends Controller
{

    //show all the houses
    function house_management(){
        
        $houses=House::where('is_deleted',0)->get();
        return view('admin/house-management' , [ 'houses'=>$houses]);
    }




    //__________________________________________ Edit product 
    function edit_house_view($id){
        try{
            $house=House::where('id',$id)->first();
        }
        catch(\Exception $exception){
            abort(404);
        }
        
        return view('admin/edit-house',['house'=>$house ]);
    }


    function edit_house(Request $req , $id){
        
        $req->validate([
            'price'=>' nullable',
            'image'=>' nullable',
            'title'=>'nullable',
            'city'=>'nullable',
            'type'=>'nullable',
            'address'=>'nullable',
        ]); 

        if($req->title)
            House::where('id',$id)->update(['title'=>$req->title]); 
        if($req->price) 
            House::where('id',$id)->update(['price'=>$req->price]);
        // if($req->description) 
        //     House::where('id',$id)->update(['description'=>$req->description]);
        if($req->city) 
            House::where('id',$id)->update(['city'=>$req->city]);

        if($req->type) 
            House::where('id',$id)->update(['type'=>$req->type]);
        
        if($req->address) 
            House::where('id',$id)->update(['address'=>$req->address]);
            
        

        if($req->file('image')){
            $file=$req->file('image');
            $productname=$file->getClientOriginalName();
            // $newName = str_replace(".jpg",'',$productname);
            
            $dstPath=public_path()."/images";
            // House::where('id',$id)->update(['photo'=>$newName]);
            House::where('id',$id)->update(['photo'=>$productname]);
            $file->move($dstPath,$productname);
        }

        return redirect()->route('editHouse',['id'=>$id])->with('success','تغییرات با موفقیت اعمال شدند');
    }

    //__________________________________________ Remove product 
    function remove_house($id){
        House::where('id',$id)->update(['is_deleted'=>1]);
        return redirect()->route('house.management')->with('success','خانه مورد نظر با موفقیت حذف شد');
    }



   

    //__________________________________________Add New product
    function add_house_view(){
        
        return view('admin/add-house');
    }


    function add_House(Request $req){
        $req->validate([
            'title'=>'required',
            'price'=>'required ',
            'address'=>'required ',
            'type'=>'required ',
            'city'=>'required ',
            // 'description'=>'required',
            'image'=>'required'
        ]);

        //save image
        $file=$req->file('image');
        $productname=$file->getClientOriginalName();
        $dstPath=public_path()."/images";
        $newImageName = str_replace(".jpg",'',$productname);
        $file->move($dstPath,$productname);

        $newHouse= new House();
        $newHouse->title=$req->title;
        $newHouse->price=$req->price;
        $newHouse->address=$req->address;
        $newHouse->type=$req->type;
        $newHouse->city=$req->city;
        
        // $newHouse->category=$req->category;
        // $newHouse->description=$req->description;
        // $newHouse->sale_quantity=0;
        // $newHouse->rating=0;
        $newHouse->photo=$newImageName;
        $newHouse->save();

        return redirect()->route('admin.panel')->with('success',' خانه جدید با موفقیت اضافه شد');
    }

    
}
