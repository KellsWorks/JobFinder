<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TermsConditions;
use App\Traits\ApiResponser;

class CopyrightController extends Controller
{
    use ApiResponser;

    public function get(Request $request){

        $termsAndConditions = TermsConditions::all();

        return $this->success(
            [
                'terms and conditions' => $termsAndConditions
            ],
            'Terms and conditions of the app'
        );
    }
}
