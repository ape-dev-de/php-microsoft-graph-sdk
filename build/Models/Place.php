<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Place
 */
class Place
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The street address of the place. */
        public ?string $address = null,
        /** The name associated with the place. */
        public ?string $displayName = null,
        /** Specifies the place location in latitude, longitude, and (optionally) altitude coordinates. */
        public ?string $geoCoordinates = null,
        /** The phone number of the place. */
        public ?string $phone = null
    ) {}
}
