<?php

namespace App\Http\Resources;

use App\Brand;
use App\Subcategory;

use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public static $wrap='item';
    public function toArray($request)
    {
        // return parent::toArray($request);
         return [
            'itemid' => $this->id,
            'itemcodeno'=>$this->codeno,
            'itemname' => $this->name,
            'itemphoto' => url($this->photo),

            'itemprice' => $this->price,
            'itemdiscount' => $this->discount,
            'itemdesc' => $this->description,
            'brand'=>Brand::find($this->brand_id),
            'subcategory'=>Subcategory::find($this->subcategory_id),
            'itemcreate_at'=>$this->create_at,
            'updated_at'=>$this->updated_at,

        ];
       
    }
}
