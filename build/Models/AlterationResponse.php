<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AlterationResponse
 */
class AlterationResponse
{
    public function __construct(
        /** Defines the original user query string. */
        public ?string $originalQueryString = null,
        /** Defines the details of the alteration information for the spelling correction. */
        public ?string $queryAlteration = null,
        /** Defines the type of the spelling correction. Possible values are: suggestion, modification. */
        public ?string $queryAlterationType = null
    ) {}
}
