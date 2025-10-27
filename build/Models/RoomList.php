<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RoomList
 */
class RoomList
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The street address of the place.
     * @var PhysicalAddress|\stdClass|null
     */
    public PhysicalAddress|\stdClass|null $address = null;

    /** The name associated with the place. */
    public ?string $displayName = null;

    /** 
     * Specifies the place location in latitude, longitude, and (optionally) altitude coordinates.
     * @var OutlookGeoCoordinates|\stdClass|null
     */
    public OutlookGeoCoordinates|\stdClass|null $geoCoordinates = null;

    /** The phone number of the place. */
    public ?string $phone = null;

    /** The email address of the room list. */
    public ?string $emailAddress = null;

    /** 
     * 
     * @var Room[]
     */
    public array $rooms = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['address'])) {
            $this->address = is_array($data['address']) ? new PhysicalAddress($data['address']) : $data['address'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['geoCoordinates'])) {
            $this->geoCoordinates = is_array($data['geoCoordinates']) ? new OutlookGeoCoordinates($data['geoCoordinates']) : $data['geoCoordinates'];
        }
        if (isset($data['phone'])) {
            $this->phone = $data['phone'];
        }
        if (isset($data['emailAddress'])) {
            $this->emailAddress = $data['emailAddress'];
        }
        if (isset($data['rooms'])) {
            $this->rooms = $data['rooms'];
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
