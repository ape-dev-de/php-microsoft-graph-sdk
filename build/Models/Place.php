<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Place
 */
class Place
{
    /**
     * The street address of the place.
     */
    private ?string $address;

    /**
     * The name associated with the place.
     */
    private ?string $displayName;

    /**
     * Specifies the place location in latitude, longitude, and (optionally) altitude coordinates.
     */
    private ?string $geoCoordinates;

    /**
     * The phone number of the place.
     */
    private ?string $phone;

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getGeoCoordinates(): ?string
    {
        return $this->geoCoordinates;
    }

    public function setGeoCoordinates(?string $geoCoordinates): self
    {
        $this->geoCoordinates = $geoCoordinates;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

}
