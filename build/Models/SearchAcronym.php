<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchAcronym
 */
class SearchAcronym
{
    public function __construct(
        /** What the acronym stands for. */
        public ?string $standsFor = null,
        /**  */
        public ?string $state = null
    ) {}
}
