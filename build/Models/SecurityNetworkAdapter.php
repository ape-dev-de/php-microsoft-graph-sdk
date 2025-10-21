<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityNetworkAdapter
 */
class SecurityNetworkAdapter
{
    public function __construct(
        /** Indicates whether the network adapter is selected for capturing and analyzing network traffic. */
        public ?bool $isEnabled = null,
        /** The name of the network adapter. */
        public ?string $name = null
    ) {}
}
