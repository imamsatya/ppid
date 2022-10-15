<?php

namespace App\JsonApi\V1\Strukturppids;

use Illuminate\Validation\Rule;
use LaravelJsonApi\Laravel\Http\Requests\ResourceRequest;
use LaravelJsonApi\Validation\Rule as JsonApiRule;

class StrukturppidRequest extends ResourceRequest
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
            'nama' => ['required', 'string'],
            'deskripsi' => ['required', 'string']

        ];
    }
}
