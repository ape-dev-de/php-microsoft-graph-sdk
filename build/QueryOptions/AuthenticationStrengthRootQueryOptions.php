<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationStrengthRoot resources
 *
 * Available select fields:
 */
class AuthenticationStrengthRootQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationStrengthRoot
     */

    /**
     * Select specific AuthenticationStrengthRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
