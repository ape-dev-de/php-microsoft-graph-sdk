<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostname
 */
class SecurityHostname
{
    public function __construct(
        /** The company or individual who registered this hostname, from WHOIS data. */
        public ?string $registrant = null,
        /** The registrar for this hostname, from WHOIS data. */
        public ?string $registrar = null
    ) {}
}
