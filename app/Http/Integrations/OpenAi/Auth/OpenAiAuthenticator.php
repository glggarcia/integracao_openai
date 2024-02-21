<?php

namespace App\Http\Integrations\OpenAi\Auth;

use Saloon\Contracts\Authenticator;
use Saloon\Http\PendingRequest;

class OpenAiAuthenticator implements Authenticator
{
    public function __construct()
    {
        //
    }

    /**
     * Apply the authentication to the request.
     */
    public function set(PendingRequest $pendingRequest): void
    {
        //
    }
}
