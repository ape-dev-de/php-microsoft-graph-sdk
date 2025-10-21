<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserSignInInsight resources
 *
 * Available select fields:
 */
class UserSignInInsightQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserSignInInsight
     */

    /**
     * Select specific UserSignInInsight properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
