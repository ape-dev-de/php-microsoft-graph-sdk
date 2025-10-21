<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIntelligenceProfileCountryOrRegionOfOrigin
 */
class SecurityIntelligenceProfileCountryOrRegionOfOrigin
{
    public function __construct(
        /** A codified representation for this country/region of origin. */
        public ?string $code = null,
        /** A display label for this ountry/region of origin. */
        public ?string $label = null
    ) {}
}
