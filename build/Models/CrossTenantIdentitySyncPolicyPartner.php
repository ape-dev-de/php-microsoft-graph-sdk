<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantIdentitySyncPolicyPartner
 */
class CrossTenantIdentitySyncPolicyPartner
{
    /** Display name for the cross-tenant user synchronization policy. Use the name of the partner Microsoft Entra tenant to easily identify the policy. Optional. */
    public ?string $displayName = null;

    /** Tenant identifier for the partner Microsoft Entra organization. Read-only. */
    public ?string $tenantId = null;

    /** 
     * Defines whether users can be synchronized from the partner tenant. Key.
     * @var CrossTenantUserSyncInbound|\stdClass|null
     */
    public mixed $userSyncInbound = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['tenantId'])) {
            $this->tenantId = $data['tenantId'];
        }
        if (isset($data['userSyncInbound'])) {
            $this->userSyncInbound = $data['userSyncInbound'];
        }
    }
}
