<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerPlanContainer resources
 *
 * Available select fields:
 * - containerId
 * - type
 * - url
 */
class PlannerPlanContainerQueryOptions extends QueryOptions
{
    public const FIELD_CONTAINER_ID = 'containerId';
    public const FIELD_TYPE = 'type';
    public const FIELD_URL = 'url';

    /**
     * Select specific PlannerPlanContainer properties
     * 
     * @param array<string> $select Use PlannerPlanContainerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
