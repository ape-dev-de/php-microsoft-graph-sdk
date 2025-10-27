<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GeoCoordinates
 */
class GeoCoordinates
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Optional. The altitude (height), in feet,  above sea level for the item. Read-only.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $altitude = null;

    /** 
     * Optional. The latitude, in decimal, for the item. Read-only.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $latitude = null;

    /** 
     * Optional. The longitude, in decimal, for the item. Read-only.
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
        if (isset($data['altitude'])) {
            $this->altitude = $data['altitude'];
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
