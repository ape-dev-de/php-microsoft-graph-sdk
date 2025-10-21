<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkforceIntegrationSupportedEntities resources
 *
 * Available select fields:
 */
class WorkforceIntegrationSupportedEntitiesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkforceIntegrationSupportedEntities
     */

    /**
     * Select specific WorkforceIntegrationSupportedEntities properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
