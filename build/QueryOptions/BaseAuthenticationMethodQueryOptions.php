<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BaseAuthenticationMethod resources
 *
 * Available select fields:
 */
class BaseAuthenticationMethodQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BaseAuthenticationMethod
     */

    /**
     * Select specific BaseAuthenticationMethod properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
