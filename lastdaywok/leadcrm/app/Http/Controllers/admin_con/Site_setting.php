<?php

namespace App\Http\Controllers\admin_con;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class Site_setting extends Controller
{

  

    protected $arr_values = array(
                            'page_title'=>'Site Setting',
                            'table_name'=>'site_setting',
                            'upload_path'=>'media/uploads/site_setting/',
                            'load_path'=>'admin/site_setting/edit',
                            'redirect_route_path'=>'admin/site_setting/edit',
                            'update_page_url'=>'admin/site_setting/update',
                           );


    public function loadForm($id)
    {
        checkAdminSession();
        check_controller_inner_access(2,3);
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
        check_controller_inner_access(2,3);

        $uploadPath = public_path($this->arr_values['upload_path']);
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        $imageName = $request->input('oldlogo'); 
        if ($request->hasFile('logo') && $request->file('logo')->isValid()) 
        {
            $imageName = uniqid() . '.' . $request->file('logo')->getClientOriginalExtension();
            $sourcePath = $request->file('logo')->getRealPath();
            $destPath   = public_path($this->arr_values['upload_path']) . $imageName;
            compressImage($sourcePath, $destPath, 75);
            // Delete old image
            $oldImagePath = public_path($this->arr_values['upload_path'] . $request->input('oldlogo'));
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        $data = [
            'mobile' => $request->input('mobile'),
            'alt_mobile' => $request->input('alt_mobile'),
            'email' => $request->input('email'),
            'alt_email' => $request->input('alt_email'),
            'address' => $request->input('address'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'twitter' => $request->input('twitter'),
            'youtube' => $request->input('youtube'),
            'map' => $request->input('map'),
            'logo' => $imageName, 
        ];

        try {
            DB::table($this->arr_values['table_name'])->where('id', $id)->update($data);
            return redirect()->route($this->arr_values['redirect_route_path'], ['id' => $id])->with('message', 'Setting Updated successfully!');
        } 
        catch (\Exception $e) {
            \Log::error('Failed to update: ' . $e->getMessage()); // Log the error for debugging
            return redirect()->back()->with('message', 'Failed to update. Please try again.');
        }
    }















}
