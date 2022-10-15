<?php

namespace App\JsonApi\V1\Regulases;

use Illuminate\Validation\Rule;
use LaravelJsonApi\Laravel\Http\Requests\ResourceRequest;
use LaravelJsonApi\Validation\Rule as JsonApiRule;

class RegulasiRequest extends ResourceRequest
{

    /**
     * Get the validation rules for the resource.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            // @TODO
            'tipe' => ['required', 'string'],
            'nama' => ['required', 'string'],
            'file_path' => ['required', 'string']
        ];
    }
}
