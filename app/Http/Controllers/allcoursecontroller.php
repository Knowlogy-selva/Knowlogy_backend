<?php

namespace App\Http\Controllers;
  
use App\Models\allcourse;
use  App\Models\categories;
use App\Models\tags;
use App\Models\schedule;
use App\Models\gallery;
use App\Models\partner;
use App\Models\partner_list;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Excel;
use App\Imports\courseImport;
use App\Exports\courseExport;


class allcoursecontroller extends Controller
{

    public function get(){
    $getcourses=allcourse::get();
    return $getcourses;
    // return view('admin.dashboard');
    }
    public function get_all(){
    $allcourse=allcourse::get();
    return view('admin.all-course',['allcourse'=>$allcourse]);
    }
    public function get_add_course(){
        $categories = categories::where('categories', '=', 'none')->get();
        $subcategories = categories::where('categories', '!=', 'none')->get();
        $tags = tags::get();
        $gallery = gallery::get();
        $partner = partner_list::get();
        return view('admin.add-course')->with('get_cate',$categories)->with('subcategories',$subcategories)->with('tags',$tags)->with('gallery',$gallery)->with('partner',$partner);
    }
    public function get_tags(){
        $tags = tags::get();
        return view('admin.tags',['tag_name' => $tags]);
    }
    public function get_categories(){
        $maincategories = categories::where('categories','=', 'none')->get();
        $allcategories = categories::get();
        return view('admin.categories')->with('get_all_categories',$maincategories)->with('get_categories',$allcategories);
    }

    public function course_data_add(Request $req){

        $add_course= new allcourse;
        $add_course->course_name=$req->course_name;
        if($req->course_overview == null){
            $add_course->course_overview="null";
        }
        else{
            $add_course->course_overview=$req->course_overview;
        }
        if($req->course_wsa == null){
            $add_course->course_wsa="null";
        }
        else{
            $add_course->course_wsa=$req->course_wsa;
        }
        if($req->course_prerequieste == null){
            $add_course->course_prerequisites="null";
        }
        else{
            $add_course->course_prerequisites=$req->course_prerequieste;

        }
        if($req->course_objectives == null){
            $add_course->course_objectives="null";
        }
        else{
            $add_course->course_objectives=$req->course_objectives;
        }
        if($req->course_outline == null){
            $add_course->course_outline="null";
        }
        else{
            $add_course->course_outline=$req->course_outline;
        }
        if($req->course_discription == null){
            $add_course->course_discription="null";
        }
        else{
            $add_course->course_discription=$req->course_discription;
        }
       
        $add_course->course_status="course_status";
        if($req->categories == null)
        {
            $add_course->course_categories = "null";
        }
        else
        {
            $add_course->course_categories=$req->categories;
        }

        if($req->fetured_image == null)
        {
            $add_course->course_image = "null";
        }
        else
        {
            $add_course->course_image= $req->fetured_image;
        }
        
        $add_course->course_tags = $req->tags;
        $add_course->course_gallery="course_gallery";
        $add_course->partner_name = $req->partner;
        $add_course->price = $req->price;
        $add_course->save();
        
                $courseid = allcourse::select('id')->latest()->first();
                $course = $courseid['id'];

            $schedule = new schedule;
            $schedule->sdate=$req->sdate;    
            $schedule->days=$req->days;
            $schedule->status=$req->status;
            $schedule->stime=$req->stime;
            $schedule->timezone=$req->timezone;
            $schedule->format=$req->deliverformat;
            $schedule->price=$req->price;
            $schedule->course_id=$course;
            $schedule->save();

            $partner = new partner;
            $partner->name = $req->partner;
            $partner->code = $req->code;
            $partner->price = $req->pprice;
            $partner->rprice = $req->rprice;
            $partner->profit = $req->profit;
            $partner->location = $req->location;
            $partner->total_course = $req->total_course;
            $partner->course_id = $course;
            $partner->save();

        return redirect('get_course'); 
    }

    public function put_categories_name(Request $req)
    {

        $categories = new categories; 
        $categories->image="empty";
        $categories->name=$req->categories_name;
        $categories->description=$req->description;
        $categories->slug=$req->categories_slug;
        $categories->count="03";
        $categories->categories=$req->parent_categories;
        $categories->save();
        return redirect('get_categories');
    }

    public function put_tags_name(Request $req)
    {
        $tags = new tags; 
        $tags->tag_name=$req->tag_name;
        $tags->description=$req->description;
        $tags->tag_slug=$req->tag_slug;
        $tags->tag_count="07";
        $tags->save();
        return redirect('get_tags');
    }

    public function edit_course($id)
    {
        $edit_course = allcourse::where('id',$id)->get();
        $schedule = schedule::where('course_id',$id)->get();
        $categories = categories::where('categories','=','none')->get();
        $subcategories = categories::where('categories', '!=','none')->get();
        $gallery = gallery::get();
        $partner = partner::where('course_id',$id)->get();
        $tags = tags::get();
        $allpartner = partner_list::get();
        return view('admin.edit_course')->with('edit_data', $edit_course)->with('schedule', $schedule)->with('categories', $categories)->with('subcategories',$subcategories)->with('gallery',$gallery)->with('partner',$partner)->with('tags',$tags)->with('allpartner',$allpartner);
    }

    public function update_course(Request $req)
    {

        if($req->fetured_image == null )
        {
            $feaured_image = allcourse::select('course_image')->where('id',$req->id)->get();
            $image_name = $feaured_image[0]['course_image'];
        }
        else{

            $image_name = $req->fetured_image;
        }
        if($req->upcategories != null)
        {
              $upcategories = $req->upcategories;
        }
        else{

             $upcategories = 'null';
        }

        allcourse::where(['id'=>$req->id])->update([
                  'course_name'=>$req->course_name,
                  'course_overview'=>$req->course_overview,
                  'course_wsa'=>$req->course_wsa,
                  'course_prerequisites'=>$req->course_prerequieste,
                  'course_objectives'=>$req->course_objectives,
                  'course_outline'=>$req->course_outline,
                  'course_discription'=>$req->course_discription,
                  'course_categories'=>$upcategories,
                  'course_image'=>$image_name,
                  'course_tags'=>$req->tags,
                  'partner_name'=>$req->partner,
                  'price'=>$req->price,
        ]);
        schedule::where(['course_id'=>$req->id])->update([
                    'sdate'=>$req->sdate,
                    'days'=>$req->days,
                    'status'=>$req->status,
                    'stime'=>$req->stime,
                    'timezone'=>$req->timezone,
                    'format'=>$req->deliverformat,
                    'price'=>$req->price,
        ]);
        partner::where(['course_id'=>$req->id])->update([
                    'name'=>$req->partner,
                    'code'=>$req->code,
                    'price'=>$req->pprice,
                    'rprice'=>$req->rprice,
                    'profit'=>$req->profit,
                    'location'=>$req->location,
                    'total_course'=>$req->total_course,
        ]);

        return redirect('get_course');
    }

    public function delete_course(Request $req)
    {
        $course_delete = allcourse::find($req->id);
        $course_delete->delete();
        $schedule_delete = schedule::where('course_id',$req->id);
        $schedule_delete->delete();
        $partner_delete = partner::where('course_id',$req->id);
        $partner_delete->delete();
        return redirect('get_course');
    }

    // categories
    
    public function delete_categories(Request $req)
    {
        $delete_categories = categories::find($req->id);
        $delete_categories->delete();
        return redirect('get_categories');
    }

    public function edit_categories($id)
    {
       $edit_categories = categories::where('id',$id)->get();
       $categories = categories::get();
       return view('admin.edit_categories')->with('edit_categories',$edit_categories)->with('categories',$categories);
    }

    public function update_categories(Request $req)
    {
        categories::where(['id'=>$req->id])->update([
            'name'=>$req->categories_name,
            'description'=>$req->description,
            'slug'=>$req->categories_slug,
            'categories'=>$req->parent_categories
        ]);
        return redirect('get_categories');
    }

    // categories

    // tags
    public function delete_tags(Request $req)
    {
        $delete_tags = tags::find($req->id);
        $delete_tags->delete();
        return redirect('get_tags');
    }
    
    public function edit_tags($id)
    {
        $edit_tags = tags::where('id',$id)->get();
        $tags = tags::get();
        return view('admin.edit_tags')->with('edit_tags',$edit_tags);
    }

    public function update_tags(Request $req)
    {
        tags::where(['id'=>$req->id])->update([

            'tag_name'=>$req->tag_name,
            'description'=>$req->description,
            'tag_slug'=>$req->tag_slug,
        ]);
        return redirect('get_tags');
    }
    // tags


    // gallery menu functionality
    public function gallery()
    {
        $gallery = gallery::get();
        return view('admin.gallery')->with('gallery',$gallery);
    }

    public function add_gallery(Request $req)
        {

        // foreach($req->file('image') as $file)
        // {
        //     $imageName = $file->getClientOriginalName();
        //     $imageType = $file->extension();
        //     $imageSize = $file->getSize();
        //     $file->storeAs('public/image',$imageName);
        //     $name[] = $imageName; 
        //     $size[] = $imageSize;
        //     $type[] = $imageType;
        // }

        // for($i=0;$i<=count($name);$i++)
        // {
        // $gallery = new gallery;
        // $gallery->name = $name[$i];
        // $gallery->size = 'size';
        // $gallery->dimensions = 'dimensions';
        // $gallery->type = 'type';
        // $gallery->path = 'path';
        // $gallery->description = "description";
        // $gallery->save();
        // }
        // return redirect('allgallery');

        $size = $req->file('image')->getSize();
        $name = $req->file('image')->getClientOriginalName();
        $type = $req->file('image')->extension(); 
        $path = Storage::url($name);
        $req->file('image')->storeAs('public/images',$name);
        $gallery = new gallery;
        $gallery->name = $name;
        $gallery->size = $size;
        $gallery->dimensions = "dimensions";
        $gallery->type = $type;
        $gallery->path = $path;
        $gallery->description = "description";
        $gallery->save();
        return redirect('allgallery');    
    }
 
    public function edit_gallery($id)
    {
        $edit_gallery = gallery::where('id',$id)->get();
        return view('admin.edit_gallery')->with('edit_gallery',$edit_gallery);
    }

    public function delete_galley(Request $req)
    {
        $gname = gallery::select('name')->where('id',$req->id)->get();
        $name = $gname[0]['name'];
        $delete = gallery::find($req->id);
        $delete->delete();
        Storage::disk('public')->delete("/images/$name");
        return redirect('allgallery');
    }

    public function get_search(Request $req)
    {
        $key = $req->search;
        $search = gallery::where('name',$key)->get();
        return view('admin.gallery')->with('gallery', $search);
    }


    public function update_gallery(Request $req)
    {
        return $req->all();
        // gallery::where(['id'=>$req->id])->update([
        //         'description' => $req->description
        // ]);
        // return redirect('allgallery');
    }
    // gallery menu functionality


    // partner-code-functionality-start-to-here
    public function allpartner()
    {
        $allpartner = partner_list::get();
        return view('admin.allpartner')->with('partners', $allpartner);

    }

    public function addpartner()
    {
        return view('admin.addpartner');
    }

    public function partner_datail_insert(Request $req)
    {
        $partner_details = new partner_list;
        $partner_details->name = $req->pname;
        $partner_details->code = $req->pcode;
        $partner_details->contact_person = $req->cperson;
        $partner_details->location = $req->plocation;
        $partner_details->city = $req->pcity;
        $partner_details->state = $req->pstate;
        $partner_details->website = $req->pwebsite;
        $partner_details->fax = $req->pfax;
        $partner_details->phone = $req->pphone;
        $partner_details->mobile = $req->pmobile;
        $partner_details->mailid = $req->pmail;
        $partner_details->address = $req->paddress;
        $partner_details->save();
        return redirect('allpartner');
    }

    public function partner_detail($id)
    {
        $partners = partner_list::where('id',$id)->get();
        $course = allcourse::get();
        $part = partner_list::where('id',$id)->get();
        return view('admin.partner_detail')->with('partners',$partners)->with('course',$course)->with('part',$part);
    }

    public function edit_partner_details($id)
    {
        $update = partner_list::where('id',$id)->get();
        return view('admin.edit_partner_details')->with('update',$update);
    }

    public function update_partner_details(Request $req)
    {
        partner_list::where(['id'=>$req->id])->update([
            'name'=>$req->pname,
            'code'=>$req->pcode,
            'contact_person'=>$req->cperson,
            'location'=>$req->plocation,
            'city'=>$req->pcity,
            'state'=>$req->pstate,
            'website'=>$req->pwebsite,
            'fax'=>$req->pfax,
            'phone'=>$req->pphone,
            'mobile'=>$req->pmobile,
            'mailid'=>$req->pmail,
            'address'=>$req->paddress,
        ]);
        return redirect('allpartner');
    }

    public function partner_delete(Request $req)
    {
        $partner_delete = partner_list::find($req->id);
        $partner_delete->delete();
        return redirect('allpartner');
    }

    public function partner_dashboard()
    {
        return view('admin.partner_dashboard');
    }
    // partner-code-functionality-end-to-here


    // excel sheet import export code functionality start to here
    public function import_excel(Request $req)
    {
        Excel::import(new courseImport,$req->sheet);
        return redirect('get_course');
    }

    public function export_excel(Request $req)
    {   
        $field =$req->name;
        return Excel::download(new courseExport($field), 'courseExport.xlsx');
         
        // return Excel::download(new courseExport, 'courseExport.xlsx');
    }
    // excel sheet import export code functionality end to here
}

