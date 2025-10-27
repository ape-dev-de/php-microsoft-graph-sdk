<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PhysicalAddress
 */
class PhysicalAddress
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The city. */
    public ?string $city = null;

    /** The country or region. It's a free-format string value, for example, 'United States'. */
    public ?string $countryOrRegion = null;

    /** The postal code. */
    public ?string $postalCode = null;

    /** The state. */
    public ?string $state = null;

    /** The street. */
    public ?string $street = null;


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
        if (isset($data['postalCode'])) {
            $this->postalCode = $data['postalCode'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['street'])) {
            $this->street = $data['street'];
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
