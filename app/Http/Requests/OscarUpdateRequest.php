<?php

namespace App\Http\Requests;

use App\Models\Oscar;
use Illuminate\Http\Exceptions\HttpResponseException;
use Pearl\RequestValidate\RequestAbstract;

class OscarUpdateRequest extends RequestAbstract
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            "local" => "required",
            "data" => "required|date_format:Y-m-d|after:".date("1929-05-16")."|before_or_equal:".date("Y-m-d"),
            "cidade" => "required",
            "apresentador" => "required",
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
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

    /*private function verifyExistsOscarYear()
    {
        $date = explode("-", $this->json->get('data'));
        $query = Oscar::whereYear('data', '=', $date[0])->where('id', '!=', $this->json->get('id'))->get();

        if(count($query) > 0){
            throw new HttpResponseException(response()->json([
                'error_description' => "Já existe uma cerimônia registrada no ano de $date[0]",
                'error_code' => 401,
                'timestamp' => date('Y-m-d H:m:s')
            ], 401));
        }
    }*/
}
