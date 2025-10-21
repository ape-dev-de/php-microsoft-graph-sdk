<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SignInUserType resources
 *
 * Available select fields:
 */
class SignInUserTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SignInUserType
     */

    /**
     * Select specific SignInUserType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
