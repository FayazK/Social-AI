<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 *
 */
class ApiAuthResource extends JsonResource
{
    public static $wrap = 'user';

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
        ];
    }// toArray

}// ApiAuthResource
