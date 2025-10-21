<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CountryNamedLocation resources
 *
 * Available select fields:
 * - countriesAndRegions
 * - countryLookupMethod
 * - includeUnknownCountriesAndRegions
 */
class CountryNamedLocationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CountryNamedLocation
     */
    public const FIELD_COUNTRIES_AND_REGIONS = 'countriesAndRegions';
    public const FIELD_COUNTRY_LOOKUP_METHOD = 'countryLookupMethod';
    public const FIELD_INCLUDE_UNKNOWN_COUNTRIES_AND_REGIONS = 'includeUnknownCountriesAndRegions';

    /**
     * Select specific CountryNamedLocation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
