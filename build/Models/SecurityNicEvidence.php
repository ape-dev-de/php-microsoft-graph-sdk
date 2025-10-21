<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityNicEvidence
 */
class SecurityNicEvidence
{
    public function __construct(
        /** The current IP address of the NIC. */
        public ?string $ipAddress = null,
        /** The MAC address of the NIC. */
        public ?string $macAddress = null,
        /** @var string[] The current virtual local area networks of the NIC. */
        public array $vlans = []
    ) {}
}
