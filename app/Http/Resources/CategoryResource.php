<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
     public static $wrap='category';
    public function toArray($request)
    {
        // return parent::toArray($request);
         return [
            'categorydid' => $this->id,

            
            'categoryname' => $this->name,
            'categoryphoto'=>url($this->photo),
        
            'categorycreate_at'=>$this->create_at,
            'updated_at'=>$this->updated_at,

        ];
}
}
