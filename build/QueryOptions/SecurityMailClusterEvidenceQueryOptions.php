<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityMailClusterEvidence resources
 *
 * Available select fields:
 * - clusterBy
 * - clusterByValue
 * - emailCount
 * - networkMessageIds
 * - query
 * - urn
 */
class SecurityMailClusterEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityMailClusterEvidence
     */
    public const FIELD_CLUSTER_BY = 'clusterBy';
    public const FIELD_CLUSTER_BY_VALUE = 'clusterByValue';
    public const FIELD_EMAIL_COUNT = 'emailCount';
    public const FIELD_NETWORK_MESSAGE_IDS = 'networkMessageIds';
    public const FIELD_QUERY = 'query';
    public const FIELD_URN = 'urn';

    /**
     * Select specific SecurityMailClusterEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
