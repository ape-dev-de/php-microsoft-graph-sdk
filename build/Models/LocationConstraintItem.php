<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LocationConstraintItem
 */
class LocationConstraintItem
{
    public function __construct(
        /** The street address of the location. */
        public ?string $address = null,
        /** The geographic coordinates and elevation of the location. */
        public ?string $coordinates = null,
        /** The name associated with the location. */
        public ?string $displayName = null,
        /** Optional email address of the location. */
        public ?string $locationEmailAddress = null,
        /** The type of location. The possible values are: default, conferenceRoom, homeAddress, businessAddress,geoCoordinates, streetAddress, hotel, restaurant, localBusiness, postalAddress. Read-only. */
        public ?string $locationType = null,
        /** Optional URI representing the location. */
        public ?string $locationUri = null,
        /** For internal use only. */
        public ?string $uniqueId = null,
        /** For internal use only. */
        public ?string $uniqueIdType = null,
        /** If set to true and the specified resource is busy, findMeetingTimes looks for another resource that is free. If set to false and the specified resource is busy, findMeetingTimes returns the resource best ranked in the user''s cache without checking if it''s free. Default is true. */
        public ?string $resolveAvailability = null
    ) {}
}
