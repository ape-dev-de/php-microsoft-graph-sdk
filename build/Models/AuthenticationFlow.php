<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationFlow
 */
class AuthenticationFlow
{
    public function __construct(
        /** Represents the transfer methods in scope for the policy. The possible values are: none, deviceCodeFlow, authenticationTransfer, unknownFutureValue. Default value is none. */
        public ?ConditionalAccessTransferMethods $transferMethod = null
    ) {}
}
