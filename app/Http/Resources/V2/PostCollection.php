<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    //public $collects = PostResource::class;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        // IMPORTANTE: ESTE PERSONALIZA A TODOS LOS RECURSOS.


        //Si poa alguna razón, los datos no se envían con el formato de PostResourcd
        //Adicione la siguiente linea en esta misma clase: public $collects = PostResource::class;
        return [
            'data' => $this->collection,
            'meta' => [
                'organization' => 'Platzi',
                'authors' => [
                    'Ivan Uribe', 'Wiedii'
                ]

                ],
            'type'=>'articles'
        ];  
    }
}
