<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BrandResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public static $wrap='brand';
    public function toArray($request)
    {
        // return parent::toArray($request);
         return [
            'brandid' => $this->id,

            
            'brandname' => $this->name,
            'brandphoto'=>url($this->photo),
        
            'brandcreate_at'=>$this->create_at,
            'updated_at'=>$this->updated_at,

        ];
}
}
