<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterLocation
 */
class PrinterLocation
{
    public function __construct(
        /** The altitude, in meters, that the printer is located at. */
        public ?float $altitudeInMeters = null,
        /** The building that the printer is located in. */
        public ?string $building = null,
        /** The city that the printer is located in. */
        public ?string $city = null,
        /** The country or region that the printer is located in. */
        public ?string $countryOrRegion = null,
        /** The floor that the printer is located on. Only numerical values are supported right now. */
        public ?string $floor = null,
        /** The description of the floor that the printer is located on. */
        public ?string $floorDescription = null,
        /** The latitude that the printer is located at. */
        public ?string $latitude = null,
        /** The longitude that the printer is located at. */
        public ?string $longitude = null,
        /** @var string[] The organizational hierarchy that the printer belongs to. The elements should be in hierarchical order. */
        public array $organization = [],
        /** The postal code that the printer is located in. */
        public ?string $postalCode = null,
        /** The description of the room that the printer is located in. */
        public ?string $roomDescription = null,
        /** The room that the printer is located in. Only numerical values are supported right now. */
        public ?string $roomName = null,
        /** The site that the printer is located in. */
        public ?string $site = null,
        /** The state or province that the printer is located in. */
        public ?string $stateOrProvince = null,
        /** The street address where the printer is located. */
        public ?string $streetAddress = null,
        /** @var string[] The subdivision that the printer is located in. The elements should be in hierarchical order. */
        public array $subdivision = [],
        /** @var string[]  */
        public array $subunit = []
    ) {}
}
