<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDataSourceContainerStatus resources
 *
 * Available select fields:
 */
class SecurityDataSourceContainerStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDataSourceContainerStatus
     */

    /**
     * Select specific SecurityDataSourceContainerStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
