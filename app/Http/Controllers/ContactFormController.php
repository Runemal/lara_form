<?php

namespace App\Http\Controllers;

use App\Models\submitData;
use App\Models\SubmitRules;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{

    public function submit(Request $request) {
//        dd($request);
        $submitData = new submitData();
        $this->validate($request, SubmitRules::rules() );
        $submitData->fill($request->all());
//        $submitData->save();

        return response()->json($submitData);


        if (!empty($request->old())){
            $submitData->fill($request->old());
        }
    }
}
