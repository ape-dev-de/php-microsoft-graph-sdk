<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LocationConstraintItem
 */
class LocationConstraintItem
{
    /** 
     * The street address of the location.
     * @var PhysicalAddress|\stdClass|null
     */
    public mixed $address = null;

    /** 
     * The geographic coordinates and elevation of the location.
     * @var OutlookGeoCoordinates|\stdClass|null
     */
    public mixed $coordinates = null;

    /** The name associated with the location. */
    public ?string $displayName = null;

    /** Optional email address of the location. */
    public ?string $locationEmailAddress = null;

    /** 
     * The type of location. The possible values are: default, conferenceRoom, homeAddress, businessAddress,geoCoordinates, streetAddress, hotel, restaurant, localBusiness, postalAddress. Read-only.
     * @var LocationType|\stdClass|null
     */
    public mixed $locationType = null;

    /** Optional URI representing the location. */
    public ?string $locationUri = null;

    /** For internal use only. */
    public ?string $uniqueId = null;

    /** 
     * For internal use only.
     * @var LocationUniqueIdType|\stdClass|null
     */
    public mixed $uniqueIdType = null;

    /** If set to true and the specified resource is busy, findMeetingTimes looks for another resource that is free. If set to false and the specified resource is busy, findMeetingTimes returns the resource best ranked in the user's cache without checking if it's free. Default is true. */
    public ?bool $resolveAvailability = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['address'])) {
            $this->address = is_array($data['address']) ? new PhysicalAddress($data['address']) : $data['address'];
        }
        if (isset($data['coordinates'])) {
            $this->coordinates = is_array($data['coordinates']) ? new OutlookGeoCoordinates($data['coordinates']) : $data['coordinates'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['locationEmailAddress'])) {
            $this->locationEmailAddress = $data['locationEmailAddress'];
        }
        if (isset($data['locationType'])) {
            $this->locationType = is_array($data['locationType']) ? new LocationType($data['locationType']) : $data['locationType'];
        }
        if (isset($data['locationUri'])) {
            $this->locationUri = $data['locationUri'];
        }
        if (isset($data['uniqueId'])) {
            $this->uniqueId = $data['uniqueId'];
        }
        if (isset($data['uniqueIdType'])) {
            $this->uniqueIdType = is_array($data['uniqueIdType']) ? new LocationUniqueIdType($data['uniqueIdType']) : $data['uniqueIdType'];
        }
        if (isset($data['resolveAvailability'])) {
            $this->resolveAvailability = $data['resolveAvailability'];
        }
    }
}
