<?php

namespace App\Http\Requests;

use App\Models\Oscar;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;
use Pearl\RequestValidate\RequestAbstract;

class OscarCreateRequest extends RequestAbstract
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        //$this->verifyExistsOscarYear();
        return [
            "local" => "required",
            //"data" => "required|unique:oscar,|date_format:Y-m-d|after:".date("1929-05-16")."|before_or_equal:".date("Y-m-d"),
            "cidade" => "required",
            "apresentador" => "required",
        ];
    }

    public function messages(): array
    {
        return [
            "local.required" => "Informe o local onde ocorreu a cerimônia.",

            "data.required" => "Informe a data da cerimônia.",
            "data.date_format" => 'Formato de data inválido. O formato deve correto deve ser YYYY-MM-DD',
            "data.after" => 'A data deve ser igual ou superior à 1929-05-16, quando ocorreu a cerimônia pela primeira vez.',
            "data.before_or_equal" => 'A data deve ser antes ou igual à data de hoje ('.date('Y-m-d').')',

            "cidade.required" => "Informa a cidade onde foi realizada a cerimônia",

            "apresentador.required" => "Informe o mestre de cerimônias dessa edição."
        ];
    }
}
