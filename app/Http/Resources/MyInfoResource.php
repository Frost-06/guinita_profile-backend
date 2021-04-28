<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MyInfoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    //resources from table
    public function toArray($request)
    {
        return parent::toArray($request);
        return [
            'id'                             => $this.id,
            'imglink'                        => $this.imglink,
            'firstname'                      => $this.firstname,
            'mi'                             => $this.mi,
            'lastname'                       => $this.lastname,
            'email'                          => $this.email,
            'address'                        => $this.address,
            'phonenumber'                    => $this.phonenumber,
            'description'                    => $this.description,
            'age'                            => $this.age,
            'birthday'                       => $this.birthday,
            'gender'                         => $this.gender,
            'status'                         => $this.status,
            'religion'                       => $this.status,
            'educcollegeprogram'           => $this.educcollegeprogram,
            'educcollegeschool'            => $this.educcollegeschool,
            'educcollegedate'              => $this.educcollegedate,
            'educseniorhighschool'        => $this.educseniorhighschool,
            'educseniorhighdate'          => $this.educseniorhighdate,
            'educjuniorhighschool'        => $this.educjuniorhighschool,
            'educjuniorhighdate'          => $this.educjuniorhighdate,
            'educprimaryschool'            => $this.educprimaryschool,
            'educprimarydate'              => $this.educprimarydate,
        ];
    }
}
