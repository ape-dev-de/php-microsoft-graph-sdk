<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationEventsFlow resources
 *
 * Available select fields:
 */
class AuthenticationEventsFlowQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationEventsFlow
     */

    /**
     * Select specific AuthenticationEventsFlow properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
