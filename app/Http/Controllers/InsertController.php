<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class InsertController extends Controller
{
    public function import() {
        Excel::import(new UsersImport(), request()->file('file'));
        return redirect('/voters');
    }
//    public function export() {
//        return Excel::download(new UsersExport, 'users.xlsx');
//    }
    public function importExportView() {
        return view('home');
    }
}
