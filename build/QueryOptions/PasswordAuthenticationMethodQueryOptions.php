<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PasswordAuthenticationMethod resources
 *
 * Available select fields:
 */
class PasswordAuthenticationMethodQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PasswordAuthenticationMethod
     */

    /**
     * Select specific PasswordAuthenticationMethod properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
