<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GeoCoordinates resources
 *
 * Available select fields:
 * - altitude
 * - latitude
 * - longitude
 */
class GeoCoordinatesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for GeoCoordinates
     */
    public const FIELD_ALTITUDE = 'altitude';
    public const FIELD_LATITUDE = 'latitude';
    public const FIELD_LONGITUDE = 'longitude';

    /**
     * Select specific GeoCoordinates properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
