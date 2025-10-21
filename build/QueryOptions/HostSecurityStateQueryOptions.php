<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for HostSecurityState resources
 *
 * Available select fields:
 * - fqdn
 * - isAzureAdJoined
 * - isAzureAdRegistered
 * - isHybridAzureDomainJoined
 * - netBiosName
 * - os
 * - privateIpAddress
 * - publicIpAddress
 * - riskScore
 */
class HostSecurityStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for HostSecurityState
     */
    public const FIELD_FQDN = 'fqdn';
    public const FIELD_IS_AZURE_AD_JOINED = 'isAzureAdJoined';
    public const FIELD_IS_AZURE_AD_REGISTERED = 'isAzureAdRegistered';
    public const FIELD_IS_HYBRID_AZURE_DOMAIN_JOINED = 'isHybridAzureDomainJoined';
    public const FIELD_NET_BIOS_NAME = 'netBiosName';
    public const FIELD_OS = 'os';
    public const FIELD_PRIVATE_IP_ADDRESS = 'privateIpAddress';
    public const FIELD_PUBLIC_IP_ADDRESS = 'publicIpAddress';
    public const FIELD_RISK_SCORE = 'riskScore';

    /**
     * Select specific HostSecurityState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
