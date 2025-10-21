<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AllowedTargetScope resources
 *
 * Available select fields:
 */
class AllowedTargetScopeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AllowedTargetScope
     */

    /**
     * Select specific AllowedTargetScope properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
