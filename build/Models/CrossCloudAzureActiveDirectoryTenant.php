<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossCloudAzureActiveDirectoryTenant
 */
class CrossCloudAzureActiveDirectoryTenant
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The ID of the cloud where the tenant is located, one of microsoftonline.com, microsoftonline.us or partner.microsoftonline.cn. Read only. */
    public ?string $cloudInstance = null;

    /** The name of the Microsoft Entra tenant. Read only. */
    public ?string $displayName = null;

    /** The ID of the Microsoft Entra tenant. Read only. */
    public ?string $tenantId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['cloudInstance'])) {
            $this->cloudInstance = $data['cloudInstance'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
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
