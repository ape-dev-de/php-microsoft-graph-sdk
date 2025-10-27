<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceGeoLocation
 */
class DeviceGeoLocation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Altitude, given in meters above sea level
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $altitude = null;

    /** 
     * Heading in degrees from true north
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $heading = null;

    /** 
     * Accuracy of longitude and latitude in meters
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $horizontalAccuracy = null;

    /** Time at which location was recorded, relative to UTC */
    public ?\DateTimeInterface $lastCollectedDateTime = null;

    /** 
     * Latitude coordinate of the device's location
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $latitude = null;

    /** 
     * Longitude coordinate of the device's location
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $longitude = null;

    /** 
     * Speed the device is traveling in meters per second
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $speed = null;

    /** 
     * Accuracy of altitude in meters
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $verticalAccuracy = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['altitude'])) {
            $this->altitude = is_numeric($data['altitude']) ? (float)$data['altitude'] : $data['altitude'];
        }
        if (isset($data['heading'])) {
            $this->heading = is_numeric($data['heading']) ? (float)$data['heading'] : $data['heading'];
        }
        if (isset($data['horizontalAccuracy'])) {
            $this->horizontalAccuracy = is_numeric($data['horizontalAccuracy']) ? (float)$data['horizontalAccuracy'] : $data['horizontalAccuracy'];
        }
        if (isset($data['lastCollectedDateTime'])) {
            $this->lastCollectedDateTime = is_string($data['lastCollectedDateTime']) ? new \DateTimeImmutable($data['lastCollectedDateTime']) : $data['lastCollectedDateTime'];
        }
        if (isset($data['latitude'])) {
            $this->latitude = is_numeric($data['latitude']) ? (float)$data['latitude'] : $data['latitude'];
        }
        if (isset($data['longitude'])) {
            $this->longitude = is_numeric($data['longitude']) ? (float)$data['longitude'] : $data['longitude'];
        }
        if (isset($data['speed'])) {
            $this->speed = is_numeric($data['speed']) ? (float)$data['speed'] : $data['speed'];
        }
        if (isset($data['verticalAccuracy'])) {
            $this->verticalAccuracy = is_numeric($data['verticalAccuracy']) ? (float)$data['verticalAccuracy'] : $data['verticalAccuracy'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
