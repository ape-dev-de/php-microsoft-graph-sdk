<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Location
 */
class Location
{
    public function __construct(
        /** The street address of the location. */
        public ?PhysicalAddress $address = null,
        /** The geographic coordinates and elevation of the location. */
        public ?OutlookGeoCoordinates $coordinates = null,
        /** The name associated with the location. */
        public ?string $displayName = null,
        /** Optional email address of the location. */
        public ?string $locationEmailAddress = null,
        /** The type of location. The possible values are: default, conferenceRoom, homeAddress, businessAddress,geoCoordinates, streetAddress, hotel, restaurant, localBusiness, postalAddress. Read-only. */
        public ?LocationType $locationType = null,
        /** Optional URI representing the location. */
        public ?string $locationUri = null,
        /** For internal use only. */
        public ?string $uniqueId = null,
        /** For internal use only. */
        public ?LocationUniqueIdType $uniqueIdType = null
    ) {}
}
