<?php

namespace App\Http\Controllers\admin_con;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class Meta_tags extends Controller
{

  

    protected $arr_values = array(
                            'page_title'=>'Site Setting',
                            'table_name'=>'meta_tags',
                            'upload_path'=>'media/uploads/meta_tags/',
                            'load_path'=>'admin/meta_tags/edit',
                            'redirect_route_path'=>'admin/meta_tags/edit',
                            'update_page_url'=>'admin/meta_tags/update',
                           );


    public function loadForm($id)
    {
        checkAdminSession();
        check_controller_inner_access(6,3);
        $page_title = $this->arr_values['page_title'];
        $upload_path = $this->arr_values['upload_path'];
        $redirect_route_path = $this->arr_values['redirect_route_path'];
        $update_page_url = $this->arr_values['update_page_url'];
        $EDITDATA = DB::table($this->arr_values['table_name'])->where('id',$id)->first();
        return view($this->arr_values['load_path'], compact('page_title', 'upload_path', 'redirect_route_path', 'EDITDATA','update_page_url'));
    }


    

    /*update data*/
    public function submitForm(Request $request, $id)
    {
        
        check_controller_inner_access(6,3);
        $data = [
            'meta_title' => $request->input('meta_title'),
            'meta_auther' => $request->input('meta_auther'),
            'meta_keyword' => $request->input('meta_keyword'),
            'meta_description' => $request->input('meta_description'),
        ];

        try {
            DB::table($this->arr_values['table_name'])->where('id', $id)->update($data);
            return redirect()->route($this->arr_values['redirect_route_path'], ['id' => $id])->with('message', 'Setting Updated successfully!');
        } 
        catch (\Exception $e) {
            \Log::error('Failed to update: ' . $e->getMessage());
            return redirect()->back()->with('message', 'Failed to update. Please try again.');
        }
    }















}
