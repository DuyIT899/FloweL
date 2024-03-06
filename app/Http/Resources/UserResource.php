<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\RoleResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "user_id" => $this->user_id,
            "name" => $this->name,
            "phone" => $this->phone,
            "address" => $this->address,
            "email" => $this->email,
            "username" => $this->username,
            "is_disabled" => $this->is_disabled === 0 ? 'no' : 'yes',
            "role" => new RoleResource($this->role),
        ];
    }
}
