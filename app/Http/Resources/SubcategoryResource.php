<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Category;

class SubcategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
     public static $wrap='subcategory';
    public function toArray($request)
    {
        // return parent::toArray($request);
         return [
            'subid' => $this->id,

            
            'subname' => $this->name,
             'category'=>Category::find($this->category_id),
        
            'subcreate_at'=>$this->create_at,
            'subupdated_at'=>$this->updated_at,

        ];
}
}
