<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TemporaryAccessPassAuthenticationMethod resources
 *
 * Available select fields:
 */
class TemporaryAccessPassAuthenticationMethodQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TemporaryAccessPassAuthenticationMethod
     */

    /**
     * Select specific TemporaryAccessPassAuthenticationMethod properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
