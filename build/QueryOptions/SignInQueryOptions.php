<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SignIn resources
 *
 * Available select fields:
 */
class SignInQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SignIn
     */

    /**
     * Select specific SignIn properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
