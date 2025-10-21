<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityNetworkConnectionEvidence resources
 *
 * Available select fields:
 * - destinationAddress
 * - destinationPort
 * - protocol
 * - sourceAddress
 * - sourcePort
 */
class SecurityNetworkConnectionEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityNetworkConnectionEvidence
     */
    public const FIELD_DESTINATION_ADDRESS = 'destinationAddress';
    public const FIELD_DESTINATION_PORT = 'destinationPort';
    public const FIELD_PROTOCOL = 'protocol';
    public const FIELD_SOURCE_ADDRESS = 'sourceAddress';
    public const FIELD_SOURCE_PORT = 'sourcePort';

    /**
     * Select specific SecurityNetworkConnectionEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
