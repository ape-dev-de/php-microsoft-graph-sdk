<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CountryNamedLocation
 */
class CountryNamedLocation
{
    /**
     * List of countries and/or regions in two-letter format specified by ISO 3166-2. Required.
     * @var string[]
     */
    private array $countriesAndRegions = [];

    /**
     * Determines what method is used to decide which country the user is located in. Possible values are clientIpAddress(default) and authenticatorAppGps. Note: authenticatorAppGps is not yet supported in the Microsoft Cloud for US Government.
     */
    private ?string $countryLookupMethod;

    /**
     * true if IP addresses that don't map to a country or region should be included in the named location. Optional. Default value is false.
     */
    private ?string $includeUnknownCountriesAndRegions;


    /**
     * @return string[]
     */
    public function getCountriesAndRegions(): array
    {
        return $this->countriesAndRegions;
    }

    /**
     * @param string[] $countriesAndRegions
     */
    public function setCountriesAndRegions(array $countriesAndRegions): self
    {
        $this->countriesAndRegions = $countriesAndRegions;
        return $this;
    }

    public function getCountryLookupMethod(): ?string
    {
        return $this->countryLookupMethod;
    }

    public function setCountryLookupMethod(?string $countryLookupMethod): self
    {
        $this->countryLookupMethod = $countryLookupMethod;
        return $this;
    }

    public function getIncludeUnknownCountriesAndRegions(): ?string
    {
        return $this->includeUnknownCountriesAndRegions;
    }

    public function setIncludeUnknownCountriesAndRegions(?string $includeUnknownCountriesAndRegions): self
    {
        $this->includeUnknownCountriesAndRegions = $includeUnknownCountriesAndRegions;
        return $this;
    }

}
