<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

//  Import facade nya
use Validator;
use JsValidator;

class ContohJsValidator extends Controller
{
  //  Halaman biasa
  public function contohForm()
  {
    //  Bikin rules biasa
    $ruleBiasa = [
      'nama' => 'required|min:3',
      'umur' => 'required|integer',
      'hobi' => 'required',
    ];

    //  Bikin jsvalidator nya pakai rules
    $validasi = JsValidator::make($ruleBiasa);

    //  Return view dan passing validator
    return view('contoh-validasi', compact(
      'validasi'
    ));
  }
}
