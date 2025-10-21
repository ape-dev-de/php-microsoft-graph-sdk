<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SignInLocation
 */
class SignInLocation
{
    /**
     * Provides the city where the sign-in originated and is determined using latitude/longitude information from the sign-in activity.
     */
    private ?string $city;

    /**
     * Provides the country code info (two letter code) where the sign-in originated.  This is calculated using latitude/longitude information from the sign-in activity.
     */
    private ?string $countryOrRegion;

    /**
     * Provides the latitude, longitude and altitude where the sign-in originated.
     */
    private ?string $geoCoordinates;

    /**
     * Provides the State where the sign-in originated. This is calculated using latitude/longitude information from the sign-in activity.
     */
    private ?string $state;


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

    public function getGeoCoordinates(): ?string
    {
        return $this->geoCoordinates;
    }

    public function setGeoCoordinates(?string $geoCoordinates): self
    {
        $this->geoCoordinates = $geoCoordinates;
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

}
