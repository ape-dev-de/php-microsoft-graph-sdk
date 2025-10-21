<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SignInContext resources
 *
 * Available select fields:
 */
class SignInContextQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SignInContext
     */

    /**
     * Select specific SignInContext properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
