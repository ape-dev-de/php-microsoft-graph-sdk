<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BaseItemVersion resources
 *
 * Available select fields:
 */
class BaseItemVersionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BaseItemVersion
     */

    /**
     * Select specific BaseItemVersion properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
