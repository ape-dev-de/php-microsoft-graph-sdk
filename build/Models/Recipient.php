<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Recipient
 */
class Recipient
{
    public function __construct(
        /** The recipient's email address. */
        public ?string $emailAddress = null
    ) {}
}
