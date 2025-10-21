<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceGeoLocation
 */
class DeviceGeoLocation
{
    public function __construct(
        /** Altitude, given in meters above sea level */
        public ?string $altitude = null,
        /** Heading in degrees from true north */
        public ?string $heading = null,
        /** Accuracy of longitude and latitude in meters */
        public ?string $horizontalAccuracy = null,
        /** Time at which location was recorded, relative to UTC */
        public ?\DateTimeInterface $lastCollectedDateTime = null,
        /** Latitude coordinate of the device's location */
        public ?string $latitude = null,
        /** Longitude coordinate of the device's location */
        public ?string $longitude = null,
        /** Speed the device is traveling in meters per second */
        public ?string $speed = null,
        /** Device location */
        public ?string $verticalAccuracy = null
    ) {}
}
