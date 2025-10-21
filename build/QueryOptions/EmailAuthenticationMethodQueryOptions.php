<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EmailAuthenticationMethod resources
 *
 * Available select fields:
 */
class EmailAuthenticationMethodQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EmailAuthenticationMethod
     */

    /**
     * Select specific EmailAuthenticationMethod properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
