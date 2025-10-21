<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiValueLegacyExtendedProperty
 */
class MultiValueLegacyExtendedProperty
{
    public function __construct(
        /** @var string[] A collection of property values. */
        public array $value = []
    ) {}
}
