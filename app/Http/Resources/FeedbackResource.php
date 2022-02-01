<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use phpDocumentor\Reflection\Types\This;

class FeedbackResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */ 
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'roll_no'=> $this->roll_no,
            'name'=> $this->name,
            'email'=> $this->email,
            'phone'=> $this->phone,
            'course' => $this->course->course_name,
            'subject'=>$this->subject->subject_name,
            'faculty' =>$this->faculty->faculty_name
        ];
    }
}
