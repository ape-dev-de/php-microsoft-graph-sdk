<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PhysicalAddress
 */
class PhysicalAddress
{
    public function __construct(
        /** The city. */
        public ?string $city = null,
        /** The country or region. It''s a free-format string value, for example, ''United States''. */
        public ?string $countryOrRegion = null,
        /** The postal code. */
        public ?string $postalCode = null,
        /** The state. */
        public ?string $state = null,
        /** The street. */
        public ?string $street = null
    ) {}
}
