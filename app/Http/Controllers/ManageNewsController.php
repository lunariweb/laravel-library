<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use DB;

class ManageNewsController extends Controller
{




    function index()
    {
     return view('news.all-news');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('news')
         ->where('headline', 'like', '%'.$query.'%')
         ->orWhere('author', 'like', '%'.$query.'%')
         ->orWhere('source', 'like', '%'.$query.'%')
         ->orWhere('image', 'like', '%'.$query.'%')

         ->orderBy('id', 'asc')
         ->get();

      }
      else
      {
       $data = DB::table('news')
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



            <td>
            <div class="w-75 p-xl-5 mb-2 border-top border-bottom border-dark">    <h1>'.$row->headline.'</h1>
                <h2>'.$row->author.'</h2>
                <h2>'.$row->source.'</h2>
                <img src="/storage/images/'.$row->image.'" width="600" class=" img-fluid">
                <p class="mt-3">'.$row->shortdes.'</p>
                <a href="/browsenews/'.$row->id.'/news" class="btn btn-success">More Details</a>


                </div>

            </td>


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
