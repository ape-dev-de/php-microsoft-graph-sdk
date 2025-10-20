<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EmployeeOrgData resources
 *
 * Available select fields:
 * - costCenter
 * - division
 */
class EmployeeOrgDataQueryOptions extends QueryOptions
{
    public const FIELD_COST_CENTER = 'costCenter';
    public const FIELD_DIVISION = 'division';

    /**
     * Select specific EmployeeOrgData properties
     * 
     * @param array<string> $select Use EmployeeOrgDataQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
