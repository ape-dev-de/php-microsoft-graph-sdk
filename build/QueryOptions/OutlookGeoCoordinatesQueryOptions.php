<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OutlookGeoCoordinates resources
 *
 * Available select fields:
 * - accuracy
 * - altitude
 * - altitudeAccuracy
 * - latitude
 * - longitude
 */
class OutlookGeoCoordinatesQueryOptions extends QueryOptions
{
    public const FIELD_ACCURACY = 'accuracy';
    public const FIELD_ALTITUDE = 'altitude';
    public const FIELD_ALTITUDE_ACCURACY = 'altitudeAccuracy';
    public const FIELD_LATITUDE = 'latitude';
    public const FIELD_LONGITUDE = 'longitude';

    /**
     * Select specific OutlookGeoCoordinates properties
     * 
     * @param array<string> $select Use OutlookGeoCoordinatesQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
