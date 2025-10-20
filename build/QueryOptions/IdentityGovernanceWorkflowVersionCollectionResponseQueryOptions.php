<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceWorkflowVersionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IdentityGovernanceWorkflowVersionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IdentityGovernanceWorkflowVersionCollectionResponse properties
     * 
     * @param array<string> $select Use IdentityGovernanceWorkflowVersionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
