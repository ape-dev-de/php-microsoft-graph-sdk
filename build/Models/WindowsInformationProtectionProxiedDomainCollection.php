<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionProxiedDomainCollection
 */
class WindowsInformationProtectionProxiedDomainCollection
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Display name */
    public ?string $displayName = null;

    /** 
     * Collection of proxied domains
     * @var ProxiedDomain[]
     */
    public array $proxiedDomains = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['proxiedDomains'])) {
            $this->proxiedDomains = $data['proxiedDomains'];
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
