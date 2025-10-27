<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantIdentitySyncPolicyPartner
 */
class CrossTenantIdentitySyncPolicyPartner
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Display name for the cross-tenant user synchronization policy. Use the name of the partner Microsoft Entra tenant to easily identify the policy. Optional. */
    public ?string $displayName = null;

    /** Tenant identifier for the partner Microsoft Entra organization. Read-only. */
    public ?string $tenantId = null;

    /** 
     * Defines whether users can be synchronized from the partner tenant. Key.
     * @var CrossTenantUserSyncInbound|\stdClass|null
     */
    public CrossTenantUserSyncInbound|\stdClass|null $userSyncInbound = null;


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
        if (isset($data['tenantId'])) {
            $this->tenantId = $data['tenantId'];
        }
        if (isset($data['userSyncInbound'])) {
            $this->userSyncInbound = is_array($data['userSyncInbound']) ? new CrossTenantUserSyncInbound($data['userSyncInbound']) : $data['userSyncInbound'];
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
