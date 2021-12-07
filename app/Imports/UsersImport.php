<?php

namespace App\Imports;

use App\Models\Candidate;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
//        return new User([
//            'name'     => $row[0],
//            'email'    => $row[1],
//            'password' => \Hash::make('123456'),
//        ]);

        return new Candidate([
            'user_id' => Auth::user()->id,
            'voters_code'     => $row[0],
            'voters_name'    => $row[1],
            'created_by' => Auth::user()->id
        ]);
    }
}
