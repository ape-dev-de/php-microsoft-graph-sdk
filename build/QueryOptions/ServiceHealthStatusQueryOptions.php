<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceHealthStatus resources
 *
 * Available select fields:
 */
class ServiceHealthStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServiceHealthStatus
     */

    /**
     * Select specific ServiceHealthStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
