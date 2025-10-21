<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkforceIntegration resources
 *
 * Available select fields:
 */
class WorkforceIntegrationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkforceIntegration
     */

    /**
     * Select specific WorkforceIntegration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
