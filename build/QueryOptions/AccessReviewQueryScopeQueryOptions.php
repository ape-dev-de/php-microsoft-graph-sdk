<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewQueryScope resources
 *
 * Available select fields:
 */
class AccessReviewQueryScopeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewQueryScope
     */

    /**
     * Select specific AccessReviewQueryScope properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
