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

    /** 
     * The accuracy of the latitude and longitude. As an example, the accuracy can be measured in meters, such as the latitude and longitude are accurate to within 50 meters.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $accuracy = null;

    /** 
     * The altitude of the location.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $altitude = null;

    /** 
     * The accuracy of the altitude.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $altitudeAccuracy = null;

    /** 
     * The latitude of the location.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $latitude = null;

    /** 
     * The longitude of the location.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $longitude = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['accuracy'])) {
            $this->accuracy = is_numeric($data['accuracy']) ? (float)$data['accuracy'] : $data['accuracy'];
        }
        if (isset($data['altitude'])) {
            $this->altitude = is_numeric($data['altitude']) ? (float)$data['altitude'] : $data['altitude'];
        }
        if (isset($data['altitudeAccuracy'])) {
            $this->altitudeAccuracy = is_numeric($data['altitudeAccuracy']) ? (float)$data['altitudeAccuracy'] : $data['altitudeAccuracy'];
        }
        if (isset($data['latitude'])) {
            $this->latitude = is_numeric($data['latitude']) ? (float)$data['latitude'] : $data['latitude'];
        }
        if (isset($data['longitude'])) {
            $this->longitude = is_numeric($data['longitude']) ? (float)$data['longitude'] : $data['longitude'];
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
