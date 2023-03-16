<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Validator;

class ClientRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nazwaOdbiorcy' => 'required',
            'mocUmowna' => 'required|numeric',
            'typKlienta' => 'required',
            'area_id' => 'required',
            'generacja' => 'required|numeric',
            'adres' => 'required',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'nazwaOdbiorcy.required' => 'Pole Nazwa odbiorcy jest wymagane',
            'mocUmowna.required' => 'Pole Moc umowna jest wymagane',
            'mocUmowna.numeric' => 'Pole Moc umowna musi byc liczbą',
            'typKlienta.required' => 'Pole Typ klienta jest wymagane',
            'area_id.required' => 'Pole Obszar jest wymagane',
            'generacja.required' => 'Pole Generacja jest wymagane',
            'generacja.numeric' => 'Pole Generacja musi byc liczbą',
            'adres.required' => 'Pole Adres ip jest wymagane',
            // 'adres.ip' => 'Błędny adres IP',
        ];
    }

    public function validate(array $data): array
    {
        return Validator::make($data, $this->rules(), $this->messages())->validate();
    }
}
