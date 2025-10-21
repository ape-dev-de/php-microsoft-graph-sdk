<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmailIdentity
 */
class EmailIdentity
{
    public function __construct(
        /** Email address of the user. */
        public ?string $email = null
    ) {}
}
