<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PhysicalOfficeAddress
 */
class PhysicalOfficeAddress
{
    public function __construct(
        /** The city. */
        public ?string $city = null,
        /** The country or region. It''s a free-format string value, for example, ''United States''. */
        public ?string $countryOrRegion = null,
        /** Office location such as building and office number for an organizational contact. */
        public ?string $officeLocation = null,
        /** The postal code. */
        public ?string $postalCode = null,
        /** The state. */
        public ?string $state = null,
        /** The street. */
        public ?string $street = null
    ) {}
}
