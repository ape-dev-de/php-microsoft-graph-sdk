<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OutlookGeoCoordinates
 */
class OutlookGeoCoordinates
{
    public function __construct(
        /** The accuracy of the latitude and longitude. As an example, the accuracy can be measured in meters, such as the latitude and longitude are accurate to within 50 meters. */
        public ?string $accuracy = null,
        /** The altitude of the location. */
        public ?string $altitude = null,
        /** The accuracy of the altitude. */
        public ?string $altitudeAccuracy = null,
        /** The latitude of the location. */
        public ?string $latitude = null,
        /** The longitude of the location. */
        public ?string $longitude = null
    ) {}
}
