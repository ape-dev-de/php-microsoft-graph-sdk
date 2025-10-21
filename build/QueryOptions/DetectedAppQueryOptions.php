<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DetectedApp resources
 *
 * Available select fields:
 */
class DetectedAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DetectedApp
     */

    /**
     * Select specific DetectedApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
