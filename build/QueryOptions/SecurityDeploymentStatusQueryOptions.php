<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDeploymentStatus resources
 *
 * Available select fields:
 */
class SecurityDeploymentStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDeploymentStatus
     */

    /**
     * Select specific SecurityDeploymentStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
