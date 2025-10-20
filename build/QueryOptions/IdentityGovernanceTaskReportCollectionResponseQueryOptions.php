<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceTaskReportCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IdentityGovernanceTaskReportCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IdentityGovernanceTaskReportCollectionResponse properties
     * 
     * @param array<string> $select Use IdentityGovernanceTaskReportCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
