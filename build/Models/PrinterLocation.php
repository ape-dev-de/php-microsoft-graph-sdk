<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterLocation
 */
class PrinterLocation
{
    /** The altitude, in meters, that the printer is located at. */
    public ?float $altitudeInMeters = null;

    /** The building that the printer is located in. */
    public ?string $building = null;

    /** The city that the printer is located in. */
    public ?string $city = null;

    /** The country or region that the printer is located in. */
    public ?string $countryOrRegion = null;

    /** The floor that the printer is located on. Only numerical values are supported right now. */
    public ?string $floor = null;

    /** The description of the floor that the printer is located on. */
    public ?string $floorDescription = null;

    /** The latitude that the printer is located at. */
    public ?string $latitude = null;

    /** The longitude that the printer is located at. */
    public ?string $longitude = null;

    /** 
     * The organizational hierarchy that the printer belongs to. The elements should be in hierarchical order.
     * @var string[]
     */
    public array $organization = [];

    /** The postal code that the printer is located in. */
    public ?string $postalCode = null;

    /** The description of the room that the printer is located in. */
    public ?string $roomDescription = null;

    /** The room that the printer is located in. Only numerical values are supported right now. */
    public ?string $roomName = null;

    /** The site that the printer is located in. */
    public ?string $site = null;

    /** The state or province that the printer is located in. */
    public ?string $stateOrProvince = null;

    /** The street address where the printer is located. */
    public ?string $streetAddress = null;

    /** 
     * The subdivision that the printer is located in. The elements should be in hierarchical order.
     * @var string[]
     */
    public array $subdivision = [];

    /** 
     * 
     * @var string[]
     */
    public array $subunit = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['altitudeInMeters'])) {
            $this->altitudeInMeters = $data['altitudeInMeters'];
        }
        if (isset($data['building'])) {
            $this->building = $data['building'];
        }
        if (isset($data['city'])) {
            $this->city = $data['city'];
        }
        if (isset($data['countryOrRegion'])) {
            $this->countryOrRegion = $data['countryOrRegion'];
        }
        if (isset($data['floor'])) {
            $this->floor = $data['floor'];
        }
        if (isset($data['floorDescription'])) {
            $this->floorDescription = $data['floorDescription'];
        }
        if (isset($data['latitude'])) {
            $this->latitude = $data['latitude'];
        }
        if (isset($data['longitude'])) {
            $this->longitude = $data['longitude'];
        }
        if (isset($data['organization'])) {
            $this->organization = $data['organization'];
        }
        if (isset($data['postalCode'])) {
            $this->postalCode = $data['postalCode'];
        }
        if (isset($data['roomDescription'])) {
            $this->roomDescription = $data['roomDescription'];
        }
        if (isset($data['roomName'])) {
            $this->roomName = $data['roomName'];
        }
        if (isset($data['site'])) {
            $this->site = $data['site'];
        }
        if (isset($data['stateOrProvince'])) {
            $this->stateOrProvince = $data['stateOrProvince'];
        }
        if (isset($data['streetAddress'])) {
            $this->streetAddress = $data['streetAddress'];
        }
        if (isset($data['subdivision'])) {
            $this->subdivision = $data['subdivision'];
        }
        if (isset($data['subunit'])) {
            $this->subunit = $data['subunit'];
        }
    }
}
