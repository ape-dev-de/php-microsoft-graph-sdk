<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryReviewSet
 */
class SecurityEdiscoveryReviewSet
{
    public function __construct(
        /** @var string[] Represents queries within the review set. */
        public array $queries = []
    ) {}
}
