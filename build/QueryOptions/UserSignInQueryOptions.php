<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserSignIn resources
 *
 * Available select fields:
 */
class UserSignInQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserSignIn
     */

    /**
     * Select specific UserSignIn properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
