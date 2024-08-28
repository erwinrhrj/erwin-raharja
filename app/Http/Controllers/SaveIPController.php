<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SaveIPController extends Controller
{
    public function saveIP(Request $request)
    {
        $input['ip'] = $_SERVER['REMOTE_ADDR'];
        $input['name'] = gethostname();
        $input['created_at'] = Carbon::now();
        $input['updated_at'] = Carbon::now();

        //  dd($input);
        Users::create($input);

        return 'created';

    }
}
