<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessGrantControl resources
 *
 * Available select fields:
 */
class ConditionalAccessGrantControlQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConditionalAccessGrantControl
     */

    /**
     * Select specific ConditionalAccessGrantControl properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
