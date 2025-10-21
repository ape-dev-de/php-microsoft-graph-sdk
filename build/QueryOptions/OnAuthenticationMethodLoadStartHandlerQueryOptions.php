<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnAuthenticationMethodLoadStartHandler resources
 *
 * Available select fields:
 */
class OnAuthenticationMethodLoadStartHandlerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnAuthenticationMethodLoadStartHandler
     */

    /**
     * Select specific OnAuthenticationMethodLoadStartHandler properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
