<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ObliterationBehavior resources
 *
 * Available select fields:
 */
class ObliterationBehaviorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ObliterationBehavior
     */

    /**
     * Select specific ObliterationBehavior properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
