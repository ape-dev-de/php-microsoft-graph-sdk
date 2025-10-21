<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmailAddress
 */
class EmailAddress
{
    public function __construct(
        /** The email address of the person or entity. */
        public ?string $address = null,
        /** The display name of the person or entity. */
        public ?string $name = null
    ) {}
}
