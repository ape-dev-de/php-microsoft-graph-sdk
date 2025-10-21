<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostReputation
 */
class SecurityHostReputation
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $classification = null,
        /** A collection of rules that have been used to calculate the classification and score. */
        public array $rules = [],
        /** The calculated score (0-100) of the requested host. A higher value indicates that this host is more likely to be suspicious or malicious. */
        public ?float $score = null
    ) {}
}
