<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SignInLocation
 */
class SignInLocation
{
    public function __construct(
        /** Provides the city where the sign-in originated and is determined using latitude/longitude information from the sign-in activity. */
        public ?string $city = null,
        /** Provides the country code info (two letter code) where the sign-in originated.  This is calculated using latitude/longitude information from the sign-in activity. */
        public ?string $countryOrRegion = null,
        /** Provides the latitude, longitude and altitude where the sign-in originated. */
        public ?string $geoCoordinates = null,
        /** Provides the State where the sign-in originated. This is calculated using latitude/longitude information from the sign-in activity. */
        public ?string $state = null
    ) {}
}
