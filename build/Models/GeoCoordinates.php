<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * GeoCoordinates
 */
class GeoCoordinates
{
    public function __construct(
        /** Optional. The altitude (height), in feet,  above sea level for the item. Read-only. */
        public ?string $altitude = null,
        /** Optional. The latitude, in decimal, for the item. Read-only. */
        public ?string $latitude = null,
        /** Optional. The longitude, in decimal, for the item. Read-only. */
        public ?string $longitude = null
    ) {}
}
