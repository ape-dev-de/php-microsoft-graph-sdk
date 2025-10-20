<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterLocation
 */
class PrinterLocation
{
    /**
     * The altitude, in meters, that the printer is located at.
     */
    private ?float $altitudeInMeters;

    /**
     * The building that the printer is located in.
     */
    private ?string $building;

    /**
     * The city that the printer is located in.
     */
    private ?string $city;

    /**
     * The country or region that the printer is located in.
     */
    private ?string $countryOrRegion;

    /**
     * The floor that the printer is located on. Only numerical values are supported right now.
     */
    private ?string $floor;

    /**
     * The description of the floor that the printer is located on.
     */
    private ?string $floorDescription;

    /**
     * The latitude that the printer is located at.
     */
    private ?string $latitude;

    /**
     * The longitude that the printer is located at.
     */
    private ?string $longitude;

    /**
     * The organizational hierarchy that the printer belongs to. The elements should be in hierarchical order.
     */
    private ?string $organization;

    /**
     * The postal code that the printer is located in.
     */
    private ?string $postalCode;

    /**
     * The description of the room that the printer is located in.
     */
    private ?string $roomDescription;

    /**
     * The room that the printer is located in. Only numerical values are supported right now.
     */
    private ?string $roomName;

    /**
     * The site that the printer is located in.
     */
    private ?string $site;

    /**
     * The state or province that the printer is located in.
     */
    private ?string $stateOrProvince;

    /**
     * The street address where the printer is located.
     */
    private ?string $streetAddress;

    /**
     * The subdivision that the printer is located in. The elements should be in hierarchical order.
     */
    private ?string $subdivision;

    /**
     */
    private ?string $subunit;

    public function getAltitudeInMeters(): ?float
    {
        return $this->altitudeInMeters;
    }

    public function setAltitudeInMeters(?float $altitudeInMeters): self
    {
        $this->altitudeInMeters = $altitudeInMeters;
        return $this;
    }

    public function getBuilding(): ?string
    {
        return $this->building;
    }

    public function setBuilding(?string $building): self
    {
        $this->building = $building;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function getCountryOrRegion(): ?string
    {
        return $this->countryOrRegion;
    }

    public function setCountryOrRegion(?string $countryOrRegion): self
    {
        $this->countryOrRegion = $countryOrRegion;
        return $this;
    }

    public function getFloor(): ?string
    {
        return $this->floor;
    }

    public function setFloor(?string $floor): self
    {
        $this->floor = $floor;
        return $this;
    }

    public function getFloorDescription(): ?string
    {
        return $this->floorDescription;
    }

    public function setFloorDescription(?string $floorDescription): self
    {
        $this->floorDescription = $floorDescription;
        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;
        return $this;
    }

    public function getOrganization(): ?string
    {
        return $this->organization;
    }

    public function setOrganization(?string $organization): self
    {
        $this->organization = $organization;
        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function getRoomDescription(): ?string
    {
        return $this->roomDescription;
    }

    public function setRoomDescription(?string $roomDescription): self
    {
        $this->roomDescription = $roomDescription;
        return $this;
    }

    public function getRoomName(): ?string
    {
        return $this->roomName;
    }

    public function setRoomName(?string $roomName): self
    {
        $this->roomName = $roomName;
        return $this;
    }

    public function getSite(): ?string
    {
        return $this->site;
    }

    public function setSite(?string $site): self
    {
        $this->site = $site;
        return $this;
    }

    public function getStateOrProvince(): ?string
    {
        return $this->stateOrProvince;
    }

    public function setStateOrProvince(?string $stateOrProvince): self
    {
        $this->stateOrProvince = $stateOrProvince;
        return $this;
    }

    public function getStreetAddress(): ?string
    {
        return $this->streetAddress;
    }

    public function setStreetAddress(?string $streetAddress): self
    {
        $this->streetAddress = $streetAddress;
        return $this;
    }

    public function getSubdivision(): ?string
    {
        return $this->subdivision;
    }

    public function setSubdivision(?string $subdivision): self
    {
        $this->subdivision = $subdivision;
        return $this;
    }

    public function getSubunit(): ?string
    {
        return $this->subunit;
    }

    public function setSubunit(?string $subunit): self
    {
        $this->subunit = $subunit;
        return $this;
    }

}
