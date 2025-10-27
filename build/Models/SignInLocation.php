<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SignInLocation
 */
class SignInLocation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Provides the city where the sign-in originated and is determined using latitude/longitude information from the sign-in activity. */
    public ?string $city = null;

    /** Provides the country code info (two letter code) where the sign-in originated.  This is calculated using latitude/longitude information from the sign-in activity. */
    public ?string $countryOrRegion = null;

    /** 
     * Provides the latitude, longitude and altitude where the sign-in originated.
     * @var GeoCoordinates|\stdClass|null
     */
    public mixed $geoCoordinates = null;

    /** Provides the State where the sign-in originated. This is calculated using latitude/longitude information from the sign-in activity. */
    public ?string $state = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['city'])) {
            $this->city = $data['city'];
        }
        if (isset($data['countryOrRegion'])) {
            $this->countryOrRegion = $data['countryOrRegion'];
        }
        if (isset($data['geoCoordinates'])) {
            $this->geoCoordinates = is_array($data['geoCoordinates']) ? new GeoCoordinates($data['geoCoordinates']) : $data['geoCoordinates'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
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
