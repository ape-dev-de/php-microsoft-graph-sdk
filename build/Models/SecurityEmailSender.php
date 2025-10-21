<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEmailSender
 */
class SecurityEmailSender
{
    public function __construct(
        /** The name of the sender. */
        public ?string $displayName = null,
        /** Sender domain. */
        public ?string $domainName = null,
        /** Sender email address. */
        public ?string $emailAddress = null
    ) {}
}
