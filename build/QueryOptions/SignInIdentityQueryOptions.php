<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SignInIdentity resources
 *
 * Available select fields:
 */
class SignInIdentityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SignInIdentity
     */

    /**
     * Select specific SignInIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
