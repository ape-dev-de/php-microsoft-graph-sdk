<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Location
 */
class Location
{
    /**
     * The street address of the location.
     */
    private ?string $address;

    /**
     * The geographic coordinates and elevation of the location.
     */
    private ?string $coordinates;

    /**
     * The name associated with the location.
     */
    private ?string $displayName;

    /**
     * Optional email address of the location.
     */
    private ?string $locationEmailAddress;

    /**
     * The type of location. The possible values are: default, conferenceRoom, homeAddress, businessAddress,geoCoordinates, streetAddress, hotel, restaurant, localBusiness, postalAddress. Read-only.
     */
    private ?string $locationType;

    /**
     * Optional URI representing the location.
     */
    private ?string $locationUri;

    /**
     * For internal use only.
     */
    private ?string $uniqueId;

    /**
     * For internal use only.
     */
    private ?string $uniqueIdType;


    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function getCoordinates(): ?string
    {
        return $this->coordinates;
    }

    public function setCoordinates(?string $coordinates): self
    {
        $this->coordinates = $coordinates;
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

    public function getLocationEmailAddress(): ?string
    {
        return $this->locationEmailAddress;
    }

    public function setLocationEmailAddress(?string $locationEmailAddress): self
    {
        $this->locationEmailAddress = $locationEmailAddress;
        return $this;
    }

    public function getLocationType(): ?string
    {
        return $this->locationType;
    }

    public function setLocationType(?string $locationType): self
    {
        $this->locationType = $locationType;
        return $this;
    }

    public function getLocationUri(): ?string
    {
        return $this->locationUri;
    }

    public function setLocationUri(?string $locationUri): self
    {
        $this->locationUri = $locationUri;
        return $this;
    }

    public function getUniqueId(): ?string
    {
        return $this->uniqueId;
    }

    public function setUniqueId(?string $uniqueId): self
    {
        $this->uniqueId = $uniqueId;
        return $this;
    }

    public function getUniqueIdType(): ?string
    {
        return $this->uniqueIdType;
    }

    public function setUniqueIdType(?string $uniqueIdType): self
    {
        $this->uniqueIdType = $uniqueIdType;
        return $this;
    }

}
