<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SiswaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nama_siswa' => $this->nama_siswa,
            'id_kategori' => $this->id_kategori,
            'jenis_kelamin' => $this->jenis_kelamin,
            'asal' => $this->asal,
            'agama' => $this->agama,
            'alamat' => $this->alamat,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
         ];
    }
}
