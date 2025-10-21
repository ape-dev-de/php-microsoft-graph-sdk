<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityNicEvidence resources
 *
 * Available select fields:
 * - ipAddress
 * - macAddress
 * - vlans
 */
class SecurityNicEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityNicEvidence
     */
    public const FIELD_IP_ADDRESS = 'ipAddress';
    public const FIELD_MAC_ADDRESS = 'macAddress';
    public const FIELD_VLANS = 'vlans';

    /**
     * Select specific SecurityNicEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
