<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceWorkflowTemplateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IdentityGovernanceWorkflowTemplateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IdentityGovernanceWorkflowTemplateCollectionResponse properties
     * 
     * @param array<string> $select Use IdentityGovernanceWorkflowTemplateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
