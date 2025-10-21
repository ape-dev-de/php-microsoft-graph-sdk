<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIpEvidence
 */
class SecurityIpEvidence
{
    public function __construct(
        /** The two-letter country code according to ISO 3166 format, for example: US, UK, CA, etc. */
        public ?string $countryLetterCode = null,
        /** The value of the IP Address, can be either in V4 address or V6 address format. */
        public ?string $ipAddress = null,
        /**  */
        public ?string $location = null,
        /**  */
        public ?string $stream = null
    ) {}
}
