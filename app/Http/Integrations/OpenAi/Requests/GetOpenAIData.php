<?php

namespace App\Http\Integrations\OpenAi\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetOpenAIData extends Request
{
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::GET;

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/example';
    }
}
