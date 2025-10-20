<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppPolicyDeploymentSummaryPerAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ManagedAppPolicyDeploymentSummaryPerAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ManagedAppPolicyDeploymentSummaryPerAppCollectionResponse properties
     * 
     * @param array<string> $select Use ManagedAppPolicyDeploymentSummaryPerAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
