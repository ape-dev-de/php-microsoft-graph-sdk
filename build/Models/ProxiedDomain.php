<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProxiedDomain
 */
class ProxiedDomain
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The IP address or FQDN */
    public ?string $ipAddressOrFQDN = null;

    /** Proxy IP or FQDN */
    public ?string $proxy = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['ipAddressOrFQDN'])) {
            $this->ipAddressOrFQDN = $data['ipAddressOrFQDN'];
        }
        if (isset($data['proxy'])) {
            $this->proxy = $data['proxy'];
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
