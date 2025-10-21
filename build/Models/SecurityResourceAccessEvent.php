<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityResourceAccessEvent
 */
class SecurityResourceAccessEvent
{
    public function __construct(
        /** The time of the access event. */
        public ?\DateTimeInterface $accessDateTime = null,
        /** The identifier of the user account. */
        public ?string $accountId = null,
        /** IP address of the resource. */
        public ?string $ipAddress = null,
        /** The protocol and host name pairs describing the connection. */
        public ?string $resourceIdentifier = null
    ) {}
}
