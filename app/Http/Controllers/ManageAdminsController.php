<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use DB;

class ManageAdminsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');

    }



    function index()
    {
     return view('manage_admins');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('admins')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')
         ->orWhere('job_title', 'like', '%'.$query.'%')
         ->orderBy('id', 'asc')
         ->get();

      }
      else
      {
       $data = DB::table('admins')
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
         <td>#OLAD2020_'.$row->id.'</td>
         <td>'.$row->name.'</td>
         <td>'.$row->email.'</td>
         <td>'.$row->job_title.'</td>
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


}
