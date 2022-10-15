<?php

namespace App\JsonApi\V1\Informasipubliks;

use Illuminate\Validation\Rule;
use LaravelJsonApi\Laravel\Http\Requests\ResourceRequest;
use LaravelJsonApi\Validation\Rule as JsonApiRule;

class InformasipublikRequest extends ResourceRequest
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
            'deskripsi' => ['required', 'string'],
            'link' => ['required', 'string'],
        ];
    }
}
