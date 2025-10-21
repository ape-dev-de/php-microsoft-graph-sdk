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
    /**
     * Available select fields for ComplianceManagementPartnerAssignment
     */
    public const FIELD_TARGET = 'target';

    /**
     * Select specific ComplianceManagementPartnerAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
