<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\StudentImport;
use Maatwebsite\Excel\Concerns\ToModel;
//use Maatwebsite\Excel\Facades\Excel;
use Excel;
use App\Exports\StudentExport;
class StudentController extends Controller
{
    public function view()
    {
        return view('import');
    }


    public function import(Request $request)
    {
        $file = $request->file('file');
       $data = Excel::Import(new StudentImport,$file);
if($data){
    return redirect()->back();
}else{
    return view('welcome');
}
       

      
    }

    public function export()
    {
        return Excel::download(new StudentExport, 'Students.xlsx');
    }
}
