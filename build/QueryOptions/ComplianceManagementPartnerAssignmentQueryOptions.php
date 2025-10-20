<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ComplianceManagementPartnerAssignment resources
 *
 * Available select fields:
 * - target
 */
class ComplianceManagementPartnerAssignmentQueryOptions extends QueryOptions
{
    public const FIELD_TARGET = 'target';

    /**
     * Select specific ComplianceManagementPartnerAssignment properties
     * 
     * @param array<string> $select Use ComplianceManagementPartnerAssignmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
