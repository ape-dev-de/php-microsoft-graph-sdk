<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceAppStatus resources
 *
 * Available select fields:
 */
class ServiceAppStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServiceAppStatus
     */

    /**
     * Select specific ServiceAppStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
