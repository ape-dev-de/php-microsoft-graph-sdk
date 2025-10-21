<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PayloadComplexity resources
 *
 * Available select fields:
 */
class PayloadComplexityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PayloadComplexity
     */

    /**
     * Select specific PayloadComplexity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
