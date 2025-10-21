<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySinglePropertySchema
 */
class SecuritySinglePropertySchema
{
    public function __construct(
        /** The name of the property. */
        public ?string $name = null,
        /** The type of the property. */
        public ?string $type = null
    ) {}
}
