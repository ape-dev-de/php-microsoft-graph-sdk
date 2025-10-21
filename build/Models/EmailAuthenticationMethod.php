<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmailAuthenticationMethod
 */
class EmailAuthenticationMethod
{
    public function __construct(
        /** The email address registered to this user. */
        public ?string $emailAddress = null
    ) {}
}
