<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

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
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->when($this->email, fn() => $this->email),
            'student_id' => $this->when($this->student_id, fn() => $this->student_id),
            'admission_id' => $this->when($this->admission_id, fn() => $this->admission_id),
            'number' => $this->when($this->number, fn() => $this->number),
            'location' => $this->when($this->location, fn() => $this->location),
            'image' => $this->when($this->image, fn() => $this->image),
            'is_active' => $this->when(isset($this->is_active), $this->is_active),
        ];
    }
}
