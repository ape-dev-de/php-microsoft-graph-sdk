<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityNetworkConnectionEvidence
 */
class SecurityNetworkConnectionEvidence
{
    public function __construct(
        /**  */
        public ?string $destinationAddress = null,
        /**  */
        public ?float $destinationPort = null,
        /**  */
        public ?string $protocol = null,
        /**  */
        public ?string $sourceAddress = null,
        /**  */
        public ?string $sourcePort = null
    ) {}
}
