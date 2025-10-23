<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityGeoLocation
 */
class SecurityGeoLocation
{
    /**  */
    public ?string $city = null;

    /**  */
    public ?string $countryName = null;

    /**  */
    public ?string $latitude = null;

    /**  */
    public ?string $longitude = null;

    /**  */
    public ?string $state = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['city'])) {
            $this->city = $data['city'];
        }
        if (isset($data['countryName'])) {
            $this->countryName = $data['countryName'];
        }
        if (isset($data['latitude'])) {
            $this->latitude = $data['latitude'];
        }
        if (isset($data['longitude'])) {
            $this->longitude = $data['longitude'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
    }
}
