<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WebApp resources
 *
 * Available select fields:
 */
class WebAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WebApp
     */

    /**
     * Select specific WebApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
