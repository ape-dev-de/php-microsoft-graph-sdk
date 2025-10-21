<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserIdentity resources
 *
 * Available select fields:
 */
class UserIdentityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserIdentity
     */

    /**
     * Select specific UserIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
