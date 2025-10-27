<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IPv6CidrRange
 */
class IPv6CidrRange
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** IPv6 address in CIDR notation. Not nullable. */
    public ?string $cidrAddress = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['cidrAddress'])) {
            $this->cidrAddress = $data['cidrAddress'];
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
