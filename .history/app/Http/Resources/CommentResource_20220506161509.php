<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    public static $wrap = "c";
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'id' => $this->id,
            'type' => 'client',
            'attributes' => [
                'name'                  => $this->name,
                'website'               => $this->website,
                'contact_person'        => $this->contact_person,
                'sector'                => $this->sector,
                'contact_person_phone'  => $this->contact_person_phone,
                'contact_person_email'  => $this->contact_person_email,
                'logo'                  => $this->url(),
                'address'               => $this->address,
                'attributes'            => $this->attributes,
                'onboarding_sections'   => $this->onboarding_sections,
                'mail_templates'        => $this->mail_templates,
            ]
            
        ];


    }
}
