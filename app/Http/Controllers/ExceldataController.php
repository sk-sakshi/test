<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\UsersExport;

use App\Imports\AuditsImport;

use Maatwebsite\Excel\Facades\Excel;

use App\Models\Exceldata;
class ExceldataController extends Controller

{

    /**

    * @return \Illuminate\Support\Collection

    */

    public function index()
  {

        $data=Exceldata::all();

        return view('exceldata',['data'=>$data]);

    }
    
    /**

    * @return \Illuminate\Support\Collection

    */
 
    public function export() 

    {

        return Excel::download(new UsersExport, 'users.xlsx');

    }

       

    /**

    * @return \Illuminate\Support\Collection

    */

    public function import(Request $request) 

    {  
       
        

         $data = Excel::import(new AuditsImport,$request->file);   
         if($data){   
        return redirect('exceldata')->with('success','Excel uploaded succefully');
         }
         else{
        return redirect('exceldata')->with('error','Something went wrong');

         }
    }

}
