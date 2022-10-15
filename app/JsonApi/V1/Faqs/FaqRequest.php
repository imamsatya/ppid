<?php

namespace App\JsonApi\V1\Faqs;

use Illuminate\Validation\Rule;
use LaravelJsonApi\Laravel\Http\Requests\ResourceRequest;
use LaravelJsonApi\Validation\Rule as JsonApiRule;

class FaqRequest extends ResourceRequest
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
            'pertanyaan' => ['required', 'string'],
            'jawaban' => ['required', 'string'],
        ];
    }
}
