<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttackSimulationOperation resources
 *
 * Available select fields:
 * - percentageCompleted
 * - tenantId
 * - type
 */
class AttackSimulationOperationQueryOptions extends QueryOptions
{
    public const FIELD_PERCENTAGE_COMPLETED = 'percentageCompleted';
    public const FIELD_TENANT_ID = 'tenantId';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific AttackSimulationOperation properties
     * 
     * @param array<string> $select Use AttackSimulationOperationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
