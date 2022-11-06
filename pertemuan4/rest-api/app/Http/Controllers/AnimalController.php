<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    protected $animal = [
        [
            'id' => 1,
            'nama' => 'Kucing',
        ],
        [
            'id' => 2,
            'nama' => 'Ayam',
        ],
        [
            'id' => 3,
            'nama' => 'Ikan',
        ],
    ];


    public function index()
    {
        foreach($this->animal as $animals)
        {
            echo $animals['nama'].", ";
        }
    }


    public function create(Request $request)
    {
        foreach($this->animal as $animals)
        {
            if($animals['id'] == $request->id)
            {
                return 'id ini sudah digunakan, silahkan gunakan id yang lain';
            }
        }
        
        array_push($this->animal,[
            'id' => $request->id,
            'nama' => $request->nama,
        ]
        );

        echo "Menambahkan data animals - ";
        echo "Nama animal: $request->nama ";
        echo "<br>";
        $this->index();
    }


    public function update(Request $request, $id){
            $data = [
                'nama' => $request->nama,
            ];

            $this->animal[$id] = $data;
            echo "Mengubah data animal id $id - ";
            echo "Nama animal: $request->nama";
            echo "<br>";
            $this->index();
    }

    public function delete($id)
    {
        array_splice($this->animal,$id);
        echo "Menghapus data animal id $id";
        echo "<br>";
        $this->index();
    }
}
