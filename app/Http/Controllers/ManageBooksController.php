<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use DB;

class ManageBooksController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');

    }



    function index()
    {
     return view('manage_books');
    }

    function action(Request $request)
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
         <td><a href="/admin/managebooks/'.$row->id.'/edit">Edit</a></td>
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

    public function edit(Book $book) {
        return view('edit', compact('book') );
    }

    public function update(Request $request, Book $book) {
        $book->update(['book_name'=>$request->book_name, 'book_type'=>$request->book_type, 'book_link'=>$request->book_link]);
        return redirect(route('admin-manage-books-view'));

    }
}
