<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
//Para crear vistas personalizadas en los Excel
use Illuminate\Contracts\View\View;
// use MaatWebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromView;
//Normalmente es FromCollecion pero se modifica para que tenga un formato de vista

class UserExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View{
        //Se crea la vista exportUsers, como formato para descarga del excel
        return view('exportUsers',
        [
            'users' => User::all()
        ]);
    }

    // public function collection()
    // {
    //     return User::all();
    // }
}
