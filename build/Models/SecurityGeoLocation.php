<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityGeoLocation
 */
class SecurityGeoLocation
{
    public function __construct(
        /**  */
        public ?string $city = null,
        /**  */
        public ?string $countryName = null,
        /**  */
        public ?string $latitude = null,
        /**  */
        public ?string $longitude = null,
        /**  */
        public ?string $state = null
    ) {}
}
