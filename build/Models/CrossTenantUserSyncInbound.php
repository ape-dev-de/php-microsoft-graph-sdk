<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantUserSyncInbound
 */
class CrossTenantUserSyncInbound
{
    /** Defines whether user objects should be synchronized from the partner tenant. false causes any current user synchronization from the source tenant to the target tenant to stop. This property has no impact on existing users who have already been synchronized. */
    public ?bool $isSyncAllowed = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['isSyncAllowed'])) {
            $this->isSyncAllowed = $data['isSyncAllowed'];
        }
    }
}
