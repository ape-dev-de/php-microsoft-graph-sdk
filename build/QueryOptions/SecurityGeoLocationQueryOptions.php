<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityGeoLocation resources
 *
 * Available select fields:
 * - city
 * - countryName
 * - latitude
 * - longitude
 * - state
 */
class SecurityGeoLocationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityGeoLocation
     */
    public const FIELD_CITY = 'city';
    public const FIELD_COUNTRY_NAME = 'countryName';
    public const FIELD_LATITUDE = 'latitude';
    public const FIELD_LONGITUDE = 'longitude';
    public const FIELD_STATE = 'state';

    /**
     * Select specific SecurityGeoLocation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
