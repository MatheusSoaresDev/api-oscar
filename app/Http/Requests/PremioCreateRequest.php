<?php

namespace App\Http\Requests;

use http\Env\Response;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Pearl\RequestValidate\RequestAbstract;
use const Grpc\STATUS_NOT_FOUND;

class PremioCreateRequest extends RequestAbstract
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
            'nome' => 'required|min:5|unique:premio',
            'oscar_id' => 'required|exists:oscar,id',
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
            'nome.required' => 'Informe o nome do prêmio.',
            'nome.min' => 'O prêmio deve ter ao menos 5 caracteres.',
            'nome.unique' => 'Já existe um prêmio com esse nome cadastrado para a cerimônia informada.',

            'oscar_id.required' => 'Informe o id da cerimônia que deseja cadastrar o prêmio.',
            'oscar_id.exists' => 'O id da cerimônia informada não existe.'

        ];
    }

    protected function failedValidation(Validator $validator): ValidationException
    {
        throw new HttpResponseException(
            response()->json([
                'timestamp' => date('Y-m-d H:m:s'),
                'status_name' => 'Bad Request',
                'status_code' => 400,
                'message' => "Foram encontrados erros nos dados do prêmio",
                'details' => $validator->errors()->messages()
            ], 400)
        );
    }
}
