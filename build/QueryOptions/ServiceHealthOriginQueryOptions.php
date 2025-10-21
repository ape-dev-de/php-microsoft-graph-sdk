<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceHealthOrigin resources
 *
 * Available select fields:
 */
class ServiceHealthOriginQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServiceHealthOrigin
     */

    /**
     * Select specific ServiceHealthOrigin properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
