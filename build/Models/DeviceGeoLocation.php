<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceGeoLocation
 */
class DeviceGeoLocation
{
    /** Altitude, given in meters above sea level */
    public ?string $altitude = null;

    /** Heading in degrees from true north */
    public ?string $heading = null;

    /** Accuracy of longitude and latitude in meters */
    public ?string $horizontalAccuracy = null;

    /** Time at which location was recorded, relative to UTC */
    public ?\DateTimeInterface $lastCollectedDateTime = null;

    /** Latitude coordinate of the device's location */
    public ?string $latitude = null;

    /** Longitude coordinate of the device's location */
    public ?string $longitude = null;

    /** Speed the device is traveling in meters per second */
    public ?string $speed = null;

    /** Accuracy of altitude in meters */
    public ?string $verticalAccuracy = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['altitude'])) {
            $this->altitude = $data['altitude'];
        }
        if (isset($data['heading'])) {
            $this->heading = $data['heading'];
        }
        if (isset($data['horizontalAccuracy'])) {
            $this->horizontalAccuracy = $data['horizontalAccuracy'];
        }
        if (isset($data['lastCollectedDateTime'])) {
            $this->lastCollectedDateTime = $data['lastCollectedDateTime'];
        }
        if (isset($data['latitude'])) {
            $this->latitude = $data['latitude'];
        }
        if (isset($data['longitude'])) {
            $this->longitude = $data['longitude'];
        }
        if (isset($data['speed'])) {
            $this->speed = $data['speed'];
        }
        if (isset($data['verticalAccuracy'])) {
            $this->verticalAccuracy = $data['verticalAccuracy'];
        }
    }
}
