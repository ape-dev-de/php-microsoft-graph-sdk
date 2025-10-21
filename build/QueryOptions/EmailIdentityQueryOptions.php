<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EmailIdentity resources
 *
 * Available select fields:
 */
class EmailIdentityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EmailIdentity
     */

    /**
     * Select specific EmailIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
