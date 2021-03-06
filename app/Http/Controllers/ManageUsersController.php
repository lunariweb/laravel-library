<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class ManageUsersController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');

    }



    function index()
    {
     return view('manage_users');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('users')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')
         ->orderBy('id', 'asc')
         ->get();

      }
      else
      {
       $data = DB::table('users')
         ->orderBy('id', 'asc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>#OLUS2020_'.$row->id.'</td>
         <td>'.$row->name.'</td>
         <td>'.$row->email.'</td>
         <td><a class="btn btn-primary" href="/admin/manageusers/'.$row->id.'/edit">Edit</a></td>
         <td><a class="btn btn-danger" href="/admin/manageusers/'.$row->id.'/deleteconfirm">Delete</a></td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }

    public function edit(User $user) {
        return view('edit_users', compact('user') );
    }

    public function update(Request $request, User $user) {
        $user->update(['name'=>$request->name, 'email'=>$request->email]);
        return redirect(route('admin-manage-users-view'))->with('message', 'User Updated Succesfully');

    }

    public function deleteConfirm(User $user) {
        return view('delete_users', compact('user'));

    }

    public function deleteSubmit(User $user) {
        $user->delete($user);
        return redirect(route('admin-manage-users-view'))->with('message', 'User deleted succesfully');
    }

    public function test() {
        return view('test');
    }
}
