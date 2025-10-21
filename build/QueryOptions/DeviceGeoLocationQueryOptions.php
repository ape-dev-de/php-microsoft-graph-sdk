<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceGeoLocation resources
 *
 * Available select fields:
 * - altitude
 * - heading
 * - horizontalAccuracy
 * - lastCollectedDateTime
 * - latitude
 * - longitude
 * - speed
 * - verticalAccuracy
 */
class DeviceGeoLocationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceGeoLocation
     */
    public const FIELD_ALTITUDE = 'altitude';
    public const FIELD_HEADING = 'heading';
    public const FIELD_HORIZONTAL_ACCURACY = 'horizontalAccuracy';
    public const FIELD_LAST_COLLECTED_DATE_TIME = 'lastCollectedDateTime';
    public const FIELD_LATITUDE = 'latitude';
    public const FIELD_LONGITUDE = 'longitude';
    public const FIELD_SPEED = 'speed';
    public const FIELD_VERTICAL_ACCURACY = 'verticalAccuracy';

    /**
     * Select specific DeviceGeoLocation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
