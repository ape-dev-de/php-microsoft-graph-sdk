<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BasicAuthentication
 */
class BasicAuthentication
{
    public function __construct(
        /** The password. It isn't returned in the responses. */
        public ?string $password = null,
        /** The username. */
        public ?string $username = null
    ) {}
}
