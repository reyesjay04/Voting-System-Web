<?php

namespace App\Http\Controllers;

use App\Models\Voters;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;

class VotersController extends Controller
{
    protected $fillable = [
        'voters_code',
        'voters_name',
    ];

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function generateCode() {
        $ids = Voters::pluck('member_id')->toArray();
        do {
            $id = rand(100000, 999999);
        } while (in_array($id, $ids));
        return $id;

    }

    public function voters(User $user)
    {

        return view('voters.index', compact('user'));
    }

    public function store() {

        $insertDate = [
            'voters_code' => request()->voters_code,
            'voters_name' => request()->voters_name,
            'user_id' => Auth::user()->id,
            'created_by' => Auth::user()->username,
            'created_at' => DB::raw('now()'),
            'updated_at' => DB::raw('now()')

        ];

        DB::table("candidates")->insert($insertDate);
        return redirect("/voters");


    }
    public function getVoters(Request $request)
    {
        if ($request->ajax()) {
            $data = Voters::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
