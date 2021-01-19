<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');  //middlware

    }



    function index()
    {
     return view('live_search');
    }

    function action(Request $request)   //fetching the data from db to a page inside controller
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('books')
         ->where('book_name', 'like', '%'.$query.'%')
         ->orWhere('book_type', 'like', '%'.$query.'%')
         ->orWhere('book_link', 'like', '%'.$query.'%')
         ->orderBy('id', 'asc')
         ->get();

      }
      else
      {
       $data = DB::table('books')
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
         <td>#OLB_'.$row->id.'</td>
         <td>'.$row->book_name.'</td>
         <td>'.$row->book_type.'</td>
         <td><a href="'.$row->book_link.'">Download</a></td>
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
