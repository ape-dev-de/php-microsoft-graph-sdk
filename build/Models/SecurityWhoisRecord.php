<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityWhoisRecord
 */
class SecurityWhoisRecord
{
    public function __construct(
        /** @var string[] The collection of historical records associated to this WHOIS object. */
        public array $history = []
    ) {}
}
