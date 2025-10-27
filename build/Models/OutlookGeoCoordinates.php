<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OutlookGeoCoordinates
 */
class OutlookGeoCoordinates
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The accuracy of the latitude and longitude. As an example, the accuracy can be measured in meters, such as the latitude and longitude are accurate to within 50 meters. */
    public ?string $accuracy = null;

    /** The altitude of the location. */
    public ?string $altitude = null;

    /** The accuracy of the altitude. */
    public ?string $altitudeAccuracy = null;

    /** The latitude of the location. */
    public ?string $latitude = null;

    /** The longitude of the location. */
    public ?string $longitude = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['accuracy'])) {
            $this->accuracy = $data['accuracy'];
        }
        if (isset($data['altitude'])) {
            $this->altitude = $data['altitude'];
        }
        if (isset($data['altitudeAccuracy'])) {
            $this->altitudeAccuracy = $data['altitudeAccuracy'];
        }
        if (isset($data['latitude'])) {
            $this->latitude = $data['latitude'];
        }
        if (isset($data['longitude'])) {
            $this->longitude = $data['longitude'];
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
