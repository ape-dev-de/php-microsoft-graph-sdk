<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDnsEvidence resources
 *
 * Available select fields:
 * - dnsServerIp
 * - domainName
 * - hostIpAddress
 * - ipAddresses
 */
class SecurityDnsEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_DNS_SERVER_IP = 'dnsServerIp';
    public const FIELD_DOMAIN_NAME = 'domainName';
    public const FIELD_HOST_IP_ADDRESS = 'hostIpAddress';
    public const FIELD_IP_ADDRESSES = 'ipAddresses';

    /**
     * Select specific SecurityDnsEvidence properties
     * 
     * @param array<string> $select Use SecurityDnsEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
