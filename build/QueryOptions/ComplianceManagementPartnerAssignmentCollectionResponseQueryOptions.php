<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ComplianceManagementPartnerAssignmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ComplianceManagementPartnerAssignmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ComplianceManagementPartnerAssignmentCollectionResponse properties
     * 
     * @param array<string> $select Use ComplianceManagementPartnerAssignmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
