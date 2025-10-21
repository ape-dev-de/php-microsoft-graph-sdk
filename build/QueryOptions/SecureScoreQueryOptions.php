<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecureScore resources
 *
 * Available select fields:
 */
class SecureScoreQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecureScore
     */

    /**
     * Select specific SecureScore properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
