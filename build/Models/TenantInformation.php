<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TenantInformation
 */
class TenantInformation
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Primary domain name of a Microsoft Entra tenant. */
    public ?string $defaultDomainName = null;

    /** Display name of a Microsoft Entra tenant. */
    public ?string $displayName = null;

    /** Name shown to users that sign in to a Microsoft Entra tenant. */
    public ?string $federationBrandName = null;

    /** Unique identifier of a Microsoft Entra tenant. */
    public ?string $tenantId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['defaultDomainName'])) {
            $this->defaultDomainName = $data['defaultDomainName'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['federationBrandName'])) {
            $this->federationBrandName = $data['federationBrandName'];
        }
        if (isset($data['tenantId'])) {
            $this->tenantId = $data['tenantId'];
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
