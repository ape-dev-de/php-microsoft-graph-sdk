<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceHealth resources
 *
 * Available select fields:
 */
class ServiceHealthQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServiceHealth
     */

    /**
     * Select specific ServiceHealth properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
