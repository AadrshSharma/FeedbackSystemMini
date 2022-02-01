<?php

namespace App\Http\Controllers;

use App\Http\Resources\FeedbackResource;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //
    public function createt(Request $request)
    {
        $data = $request->only('roll_no','name','email','phone','course_id','subject_id','faculty_id','message');
        $created = Feedback::create($data);

        $created->hobbies()->attach(collect($request->hobbies));

        return response()->json(['data' => 'created'], 200);

    }
    public function update(Request $request,$id)
    {
        $student = Feedback::where('id', $request->id)->first();
        $data = $request->only('roll_no','name','email','phone','course_id','subject_id','faculty_id','message');
        $student->update($data);
        return response()->json(['data' => 'updated'], 200);

    }
    public function list(){

            // $data = Feedback::with('course')->get();
            // return response()->json(['data' => $data], 200);

            return FeedbackResource::collection(
                Feedback::get()
            );

    }
    public function delete(Request $request){
        $student = Feedback::where('id', $request->id)->first();
        $student->delete();
    }

}
