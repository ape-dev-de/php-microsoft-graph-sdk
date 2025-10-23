<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GeoCoordinates
 */
class GeoCoordinates
{
    /** Optional. The altitude (height), in feet,  above sea level for the item. Read-only. */
    public ?string $altitude = null;

    /** Optional. The latitude, in decimal, for the item. Read-only. */
    public ?string $latitude = null;

    /** Optional. The longitude, in decimal, for the item. Read-only. */
    public ?string $longitude = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
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
}
