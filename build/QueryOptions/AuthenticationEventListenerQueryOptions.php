<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationEventListener resources
 *
 * Available select fields:
 */
class AuthenticationEventListenerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationEventListener
     */

    /**
     * Select specific AuthenticationEventListener properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
