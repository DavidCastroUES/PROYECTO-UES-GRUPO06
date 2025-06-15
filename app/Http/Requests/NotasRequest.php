<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'nota_trimestral' => 'required|numeric',
          'nota_cotidiana' => 'required|numeric',
          'nota_porcent'=>'required|numeric',
          'activi_1'=>'required|numeric',
          'activi_2'=>'required|numeric',
          'promedio_i'=>'required|numeric',
          'prom_i_porcent'=>'required|numeric',
          'laboratorio'=>'required|numeric',
          'examen'=>'required|numeric',
          'promedio_p'=>'required|numeric',
          'prom_p_porcent'=>'required|numeric',
          'moral_civica'=>'required|alpha',
          'nota_conducta'=>'required|integer',
        ];
    }
}