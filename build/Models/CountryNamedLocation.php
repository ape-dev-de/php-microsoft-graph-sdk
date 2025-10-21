<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CountryNamedLocation
 */
class CountryNamedLocation
{
    public function __construct(
        /** @var string[] List of countries and/or regions in two-letter format specified by ISO 3166-2. Required. */
        public array $countriesAndRegions = [],
        /** Determines what method is used to decide which country the user is located in. Possible values are clientIpAddress(default) and authenticatorAppGps. Note: authenticatorAppGps is not yet supported in the Microsoft Cloud for US Government. */
        public ?string $countryLookupMethod = null,
        /** true if IP addresses that don't map to a country or region should be included in the named location. Optional. Default value is false. */
        public ?string $includeUnknownCountriesAndRegions = null
    ) {}
}
