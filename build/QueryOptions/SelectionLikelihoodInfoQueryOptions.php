<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SelectionLikelihoodInfo resources
 *
 * Available select fields:
 */
class SelectionLikelihoodInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SelectionLikelihoodInfo
     */

    /**
     * Select specific SelectionLikelihoodInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
