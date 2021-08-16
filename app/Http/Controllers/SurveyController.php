<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Response;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {

        $q1_a1 = DB::table('responses')->where('age_group', '=', '<18')->count();
        $q1_a2 = DB::table('responses')->where('age_group', '=', '18 to 35')->count();
        $q1_a3 = DB::table('responses')->where('age_group', '=', '35 to 60')->count();
        $q1_a4 = DB::table('responses')->where('age_group', '=', 'Above 60')->count();

        $q2_a1 = DB::table('responses')->where('education_level', '=', 'Secondary school and below')->count();
        $q2_a2 = DB::table('responses')->where('education_level', '=', 'Diploma')->count();
        $q2_a3 = DB::table('responses')->where('education_level', '=', 'Degree')->count();
        $q2_a4 = DB::table('responses')->where('education_level', '=', 'Post graduate degree')->count();

        $q3_a1 = DB::table('responses')->where('monthly_income', '=', 'Less than RM 1000')->count();
        $q3_a2 = DB::table('responses')->where('monthly_income', '=', 'Between RM1000 to RM3000')->count();
        $q3_a3 = DB::table('responses')->where('monthly_income', '=', 'Between RM3000 to RM5000')->count();
        $q3_a4 = DB::table('responses')->where('monthly_income', '=', 'More than RM5000')->count();

        $q4_a1 = DB::table('responses')->where('gender', '=', 'Male')->count();
        $q4_a2 = DB::table('responses')->where('gender', '=', 'Female')->count();

        return view('survey.show', [
            'q1_a1' => $q1_a1,
            'q1_a2' => $q1_a2,
            'q1_a3' => $q1_a3,
            'q1_a4' => $q1_a4,
            'q2_a1' => $q2_a1,
            'q2_a2' => $q2_a2,
            'q2_a3' => $q2_a3,
            'q2_a4' => $q2_a4,
            'q3_a1' => $q3_a1,
            'q3_a2' => $q3_a2,
            'q3_a3' => $q3_a3,
            'q3_a4' => $q3_a4,
            'q4_a1' => $q4_a1,
            'q4_a2' => $q4_a2,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $questions = Question::all();

        return view('survey.create', compact('questions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {


        $validate = $request->validate([
            '1' => 'required',
            '2' => 'required',
            '3' => 'required',
            '4' => 'required'
        ]);
        if ($validate) {
            $response = new Response();

            if ($request['1'] == '1') {
                $response->age_group = '<18';
            } elseif ($request['age_group'] == '2') {
                $response->age_group = '18 to 35';
            } elseif ($request['age_group'] == '3') {
                $response->age_group = '35 to 60';
            } elseif ($request['age_group'] == '4') {
                $response->age_group = 'Above 60';
            }
            if ($request['education_level'] == '5') {
                $response->education_level = 'Secondary school and below';
            } elseif ($request['education_level'] == '6') {
                $response->education_level = 'Diploma';
            } elseif ($request['age_group'] == '7') {
                $response->education_level = 'Degree';
            } elseif ($request['education_level'] == '8') {
                $response->education_level = 'Post graduate degree';
            }
            if ($request['monthly_income'] == '9') {
                $response->monthly_income = 'Less than RM 1000';
            } elseif ($request['monthly_income'] == '10') {
                $response->monthly_income = 'Between RM1000 to RM3000';
            } elseif ($request['monthly_income'] == '11') {
                $response->monthly_income = 'Between RM3000 to RM5000';
            } elseif ($request['age_group'] == '12') {
                $response->monthly_income = 'More than RM5000';
            }
            if ($request['gender'] == '13') {
                $response->gender = 'Male';
            } elseif ($request['gender'] == '14') {
                $response->gender = 'Female';
            }

            $response->save();

            return Redirect::to('survey');
        }

    }

    /**
     * Display the specified resource.
     *
     * @return Application|Factory|View
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy($id)
    {
        //
    }
}
