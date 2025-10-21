<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHuntingQueryResults
 */
class SecurityHuntingQueryResults
{
    public function __construct(
        /** The results of the hunting query. */
        public array $results = [],
        /** @var string[] The schema for the response. */
        public array $schema = []
    ) {}
}
