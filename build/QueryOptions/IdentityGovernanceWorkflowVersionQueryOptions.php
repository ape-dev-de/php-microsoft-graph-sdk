<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceWorkflowVersion resources
 *
 * Available select fields:
 * - versionNumber
 */
class IdentityGovernanceWorkflowVersionQueryOptions extends QueryOptions
{
    public const FIELD_VERSION_NUMBER = 'versionNumber';

    /**
     * Select specific IdentityGovernanceWorkflowVersion properties
     * 
     * @param array<string> $select Use IdentityGovernanceWorkflowVersionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
