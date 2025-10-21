<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WeakAlgorithms resources
 *
 * Available select fields:
 */
class WeakAlgorithmsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WeakAlgorithms
     */

    /**
     * Select specific WeakAlgorithms properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
