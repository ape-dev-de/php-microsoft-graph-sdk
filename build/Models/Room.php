<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Room
 */
class Room
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The street address of the place.
     * @var PhysicalAddress|\stdClass|null
     */
    public mixed $address = null;

    /** The name associated with the place. */
    public ?string $displayName = null;

    /** 
     * Specifies the place location in latitude, longitude, and (optionally) altitude coordinates.
     * @var OutlookGeoCoordinates|\stdClass|null
     */
    public mixed $geoCoordinates = null;

    /** The phone number of the place. */
    public ?string $phone = null;

    /** Specifies the name of the audio device in the room. */
    public ?string $audioDeviceName = null;

    /** 
     * Type of room. Possible values are standard, and reserved.
     * @var BookingType|\stdClass|null
     */
    public mixed $bookingType = null;

    /** Specifies the building name or building number that the room is in. */
    public ?string $building = null;

    /** Specifies the capacity of the room. */
    public ?float $capacity = null;

    /** Specifies the name of the display device in the room. */
    public ?string $displayDeviceName = null;

    /** Email address of the room. */
    public ?string $emailAddress = null;

    /** Specifies a descriptive label for the floor, for example, P. */
    public ?string $floorLabel = null;

    /** Specifies the floor number that the room is on. */
    public ?float $floorNumber = null;

    /** Specifies whether the room is wheelchair accessible. */
    public ?bool $isWheelChairAccessible = null;

    /** Specifies a descriptive label for the room, for example, a number or name. */
    public ?string $label = null;

    /** Specifies a nickname for the room, for example, 'conf room'. */
    public ?string $nickname = null;

    /** 
     * Specifies other features of the room, for example, details like the type of view or furniture type.
     * @var string[]
     */
    public array $tags = [];

    /** Specifies the name of the video device in the room. */
    public ?string $videoDeviceName = null;


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
        if (isset($data['audioDeviceName'])) {
            $this->audioDeviceName = $data['audioDeviceName'];
        }
        if (isset($data['bookingType'])) {
            $this->bookingType = is_array($data['bookingType']) ? new BookingType($data['bookingType']) : $data['bookingType'];
        }
        if (isset($data['building'])) {
            $this->building = $data['building'];
        }
        if (isset($data['capacity'])) {
            $this->capacity = $data['capacity'];
        }
        if (isset($data['displayDeviceName'])) {
            $this->displayDeviceName = $data['displayDeviceName'];
        }
        if (isset($data['emailAddress'])) {
            $this->emailAddress = $data['emailAddress'];
        }
        if (isset($data['floorLabel'])) {
            $this->floorLabel = $data['floorLabel'];
        }
        if (isset($data['floorNumber'])) {
            $this->floorNumber = $data['floorNumber'];
        }
        if (isset($data['isWheelChairAccessible'])) {
            $this->isWheelChairAccessible = $data['isWheelChairAccessible'];
        }
        if (isset($data['label'])) {
            $this->label = $data['label'];
        }
        if (isset($data['nickname'])) {
            $this->nickname = $data['nickname'];
        }
        if (isset($data['tags'])) {
            $this->tags = $data['tags'];
        }
        if (isset($data['videoDeviceName'])) {
            $this->videoDeviceName = $data['videoDeviceName'];
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
