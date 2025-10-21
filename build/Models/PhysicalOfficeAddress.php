<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PhysicalOfficeAddress
 */
class PhysicalOfficeAddress
{
    /**
     * The city.
     */
    private ?string $city;

    /**
     * The country or region. It''s a free-format string value, for example, ''United States''.
     */
    private ?string $countryOrRegion;

    /**
     * Office location such as building and office number for an organizational contact.
     */
    private ?string $officeLocation;

    /**
     * The postal code.
     */
    private ?string $postalCode;

    /**
     * The state.
     */
    private ?string $state;

    /**
     * The street.
     */
    private ?string $street;


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

    public function getOfficeLocation(): ?string
    {
        return $this->officeLocation;
    }

    public function setOfficeLocation(?string $officeLocation): self
    {
        $this->officeLocation = $officeLocation;
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

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): self
    {
        $this->street = $street;
        return $this;
    }

}
