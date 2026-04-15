<?php
namespace App\Http\Controllers\admin_con;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class Tbl_admin extends Controller
{
    protected $arr_values = array(
                            'page_title'=>'Role Wise User',
                            'table_name'=>'tbl_admin',
                            'upload_path'=>'media/uploads/tbl_admin/',
                            'table_data_page_url'=>'admin/tbl_admin/table',
                            'table_data_pagination_limit'=>10,
                            'load_list_path'=>'admin/tbl_admin/list',
                            /*load form path and update url*/
                            'add_form_path'=>'admin/tbl_admin/form',
                            'addupdate_form'=>'admin_con/tbl_admin/storeOrUpdate',
                            /*add page*/
                            'add_page_link'=>'tbl_admin/add',
                            /*edit page*/
                            'edit_page_url'=>'admin/tbl_admin/edit',
                            'view_page_url'=>'admin/tbl_admin/view',
                            /*status*/
                            'status_url'=>'admin/tbl_admin/update_status',
                            /*delete*/
                            'delete_single_url'=>'admin_con/tbl_admin/delete_data',
                            'multiple_delete'=>'admin_con/tbl_admin/multiple_delete_data',
                            'check_image'=>true,
                            'controller_name'=>'tbl_admin',
                            'page_name'=>'tbl_admin-details',    

                           ); 




    // Display all 
    public function listing()
    {
        checkAdminSession();
        check_controller_inner_access(1,1);
        $page_title = $this->arr_values['page_title'];
        $upload_path = $this->arr_values['upload_path'];
        $table_data_page_url = $this->arr_values['table_data_page_url'];
        $table_data_pagination_limit = $this->arr_values['table_data_pagination_limit'];
        $add_page_link = $this->arr_values['add_page_link'];
        $edit_page_url = $this->arr_values['edit_page_url'];
        $view_page_url = $this->arr_values['view_page_url'];
        $status_url = $this->arr_values['status_url'];
        $delete_single_url = $this->arr_values['delete_single_url'];
        $multiple_delete = $this->arr_values['multiple_delete'];

        $ALLDATA = DB::table($this->arr_values['table_name'])->orderBy('id', 'desc')->get();
        return view($this->arr_values['load_list_path'], compact('ALLDATA','page_title', 'upload_path','table_data_page_url','table_data_pagination_limit','add_page_link',"edit_page_url","status_url","delete_single_url","multiple_delete","view_page_url"));
    }

    /*get table from ajax*/
   public function getTableData(Request $request)
    {
        check_controller_inner_access(1,1);
        $search = $request->input('search', '');
        $limit = $this->arr_values['table_data_pagination_limit'];
        $offset = $request->input('offset', 0);
        $upload_path = $this->arr_values['upload_path'];
        $edit_page_url = $this->arr_values['edit_page_url'];
        $view_page_url = $this->arr_values['view_page_url'];
        $query = DB::table($this->arr_values['table_name'])
            ->where('type', 2);

        if (!empty($search)) {
            $query->where(function($q) use ($search) {
                $q->where('username', 'LIKE', "%{$search}%")
                  ->orWhere('id', 'LIKE', "%{$search}%");
            });
        }
        $totalRows = $query->count();
        $ALLDATA = $query->offset($offset)->limit($limit)->orderBy('id', 'desc')->get();
        $totalPages = ceil($totalRows / $limit);
        $currentPage = ($offset / $limit) + 1;
        // Generate ellipsis-style pagination
        $paginationLinks = '';
        $paginationLinks .= '<a href="#" class="pagination-link btn btn-light btn-sm" data-offset="' . max(0, $offset - $limit) . '">&lt;</a>';
        if ($totalPages <= 5) {
            for ($i = 1; $i <= $totalPages; $i++) {
                $active = $i == $currentPage ? 'active-page' : '';
                $paginationLinks .= '<a href="#" class="pagination-link btn btn-primary btn-sm ' . $active . '" style="margin: 5px 3px; border-radius: 25%;" data-offset="' . (($i - 1) * $limit) . '">' . $i . '</a>';
            }
        } else 
        {
            if ($currentPage > 2) {
                $paginationLinks .= '<a href="#" class="pagination-link btn btn-primary btn-sm" data-offset="0">1</a>';
                if ($currentPage > 3) {
                    $paginationLinks .= '<span class="btn btn-light btn-sm disabled">...</span>';
                }
            }

            $start = max(1, $currentPage - 1);
            $end = min($totalPages, $currentPage + 1);

            for ($i = $start; $i <= $end; $i++) {
                $active = $i == $currentPage ? 'active-page' : '';
                $paginationLinks .= '<a href="#" class="pagination-link btn btn-primary btn-sm ' . $active . '" data-offset="' . (($i - 1) * $limit) . '">' . $i . '</a>';
            }

            if ($currentPage < $totalPages - 1) {
                if ($currentPage < $totalPages - 2) {
                    $paginationLinks .= '<span class="btn btn-light btn-sm disabled">...</span>';
                }
                $paginationLinks .= '<a href="#" class="pagination-link btn btn-primary btn-sm" data-offset="' . (($totalPages - 1) * $limit) . '">' . $totalPages . '</a>';
            }
        }

        $paginationLinks .= '<a href="#" class="pagination-link btn btn-light btn-sm" data-offset="' . min($offset + $limit, ($totalPages - 1) * $limit) . '">&gt;</a>';

        $view = view($this->arr_values['table_data_page_url'], compact('ALLDATA', 'totalRows', 'totalPages','offset','upload_path','edit_page_url','view_page_url'))->render();

        return response()->json([
            'html' => $view,
            'pagination_links' => $paginationLinks,
            'limit' => $limit,
        ]);
    }



    /*--------------------add-----------------------*/
    public function add_page_url()
    {
        checkAdminSession();
        check_controller_inner_access(1,2);
        $page_title = 'Add '.$this->arr_values['page_title'];
        $addupdate_form = $this->arr_values['addupdate_form'];
        return view($this->arr_values['add_form_path'], compact('page_title','addupdate_form'));
    }


    /*--------------------update/edit page----------------------------*/
    public function edit_page_url($id)
    {
        checkAdminSession();
        check_controller_inner_access(1,3);
        $page_title = 'Update '.$this->arr_values['page_title'];
        $addupdate_form = $this->arr_values['addupdate_form'];
        $upload_path = $this->arr_values['upload_path'];
        $EDITDATA = DB::table($this->arr_values['table_name'])->where('id', $id)->first();
        if (!$EDITDATA) {
            return redirect()->route($this->arr_values['load_list_path'])->with('message', 'not found.');
        }
        return view($this->arr_values['add_form_path'], compact('EDITDATA','page_title','upload_path','addupdate_form'));
    }  

     public function view_page_url($id)
    {
        checkAdminSession();
        check_controller_inner_access(1,5);
        $page_title = 'View '.$this->arr_values['page_title'];
        $addupdate_form = $this->arr_values['addupdate_form'];
        $upload_path = $this->arr_values['upload_path'];
        $EDITDATA = DB::table($this->arr_values['table_name'])->where('id', $id)->first();
        if (!$EDITDATA) {
            return redirect()->route($this->arr_values['load_list_path'])->with('message', 'not found.');
        }
        return view($this->arr_values['view_page_url'], compact('EDITDATA','page_title','upload_path','addupdate_form'));
    } 

    /*----------------------------status update----------------------------*/
    public function updateStatus(Request $request)
    {
        check_controller_inner_access(1,3);
        $id = $request->input('id');
        $status = $request->input('status');
        $request->validate([
            'id' => 'required|integer|exists:' . $this->arr_values['table_name'] . ',id',
            'status' => 'required|boolean'
        ]);

        DB::table($this->arr_values['table_name'])
            ->where('id', $id)
            ->update(['status' => $status]);
        $statusHtml = status($status);
        return response()->json([
            'success' => true,
            'data' => ['status' => $statusHtml]
        ]);
    }
    
    /*-------------------------------single delete----------------------------*/
    public function delete_data($id)
    {
        check_controller_inner_access(1,4);
        $check_image = $this->arr_values['check_image'];
        $category = DB::table($this->arr_values['table_name'])->where('id', $id)->first();
        if($category) 
        {
            if ($check_image == true) 
            {
                if ($category->image && file_exists(public_path($this->arr_values['upload_path'] . $category->image))) {
                    unlink(public_path($this->arr_values['upload_path'] . $category->image));
                }
            }
            DB::table($this->arr_values['table_name'])->where('id', $id)->delete();
            return response()->json([
                'success' => true,
                'message' => 'Deleted Successfully.'
            ]);
        }
        return response()->json([
            'success' => false,
            'message' => 'Not found.'
        ]);
    }

    /*delete multiple*/
    public function multiple_delete_data(Request $request)
    {
        check_controller_inner_access(1,4);
        $ids = $request->input('id');
        $check_image = $this->arr_values['check_image'];

        if (!empty($ids)) {
            if ($check_image == true) {
                $categories = DB::table($this->arr_values['table_name'])->whereIn('id', $ids)->get();
                foreach ($categories as $category) {
                    if ($category->image && file_exists(public_path($this->arr_values['upload_path'] . $category->image))) {
                        unlink(public_path($this->arr_values['upload_path'] . $category->image));
                    }
                }
            }
            DB::table($this->arr_values['table_name'])->whereIn('id', $ids)->delete();
            session()->flash('message', 'Records have been successfully deleted.');
            return response()->json(['status' => 'success', 'message' => 'Records deleted successfully']);
        }
        return response()->json(['status' => 'error', 'message' => 'No records selected']);
    }


    




    /*-------------------add update data here --------------------*/

    public function storeOrUpdate(Request $request)
    {
        check_controller_inner_access(1,3);
        date_default_timezone_set('Asia/Kolkata');

        $id = $request->input('id'); 

        $type = 2;
        $role = $request->input('role');
        $username = $request->input('username');
        $password = $request->input('password');
        $status = $request->input('status');
        $timestamp = now();

        // Check if username already exists (except current row while updating)
        $checkUsername = DB::table($this->arr_values['table_name'])
                            ->where('username', $username)
                            ->when(!empty($id), fn($q) => $q->where('id', '!=', $id))
                            ->exists();

        if ($checkUsername) {
            return back()->with('message', 'Username already exists. Use another one!');
        }

        
        $data = [
            "type"   => $type,
            "role"   => $role,
            "username"   => $username,
            "password" => $password,
            "status"  => $status
        ];

        if (empty($id)) {
            $data['addeddate'] = $timestamp;
            $insert_id = DB::table($this->arr_values['table_name'])->insertGetId($data);
        } else {
            $data['modifieddate'] = $timestamp;
            DB::table($this->arr_values['table_name'])->where('id', $id)->update($data);
            $insert_id = $id;
        }

        

        return redirect()->route($this->arr_values['load_list_path'])->with('message', 'Record saved successfully.');
    }
































































    

















}
