<?php

namespace App\Http\Requests\Create;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @OA\Schema(
 *      @OA\Property(property="candidate_id", type="string", example="1"),
 *      @OA\Property(property="opportunity_id", type="string", example="1"),
 * ),
 */
class CreateApplicationRequest extends FormRequest
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
            'candidate_id' => 'integer',
            'opportunity_id' => 'integer',
        ];
    }
}