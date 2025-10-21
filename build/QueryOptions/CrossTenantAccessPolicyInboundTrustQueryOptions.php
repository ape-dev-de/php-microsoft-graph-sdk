<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CrossTenantAccessPolicyInboundTrust resources
 *
 * Available select fields:
 * - isCompliantDeviceAccepted
 * - isHybridAzureADJoinedDeviceAccepted
 * - isMfaAccepted
 */
class CrossTenantAccessPolicyInboundTrustQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CrossTenantAccessPolicyInboundTrust
     */
    public const FIELD_IS_COMPLIANT_DEVICE_ACCEPTED = 'isCompliantDeviceAccepted';
    public const FIELD_IS_HYBRID_AZURE_ADJOINED_DEVICE_ACCEPTED = 'isHybridAzureADJoinedDeviceAccepted';
    public const FIELD_IS_MFA_ACCEPTED = 'isMfaAccepted';

    /**
     * Select specific CrossTenantAccessPolicyInboundTrust properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
