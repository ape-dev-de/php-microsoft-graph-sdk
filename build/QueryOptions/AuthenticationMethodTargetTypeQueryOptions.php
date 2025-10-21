<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationMethodTargetType resources
 *
 * Available select fields:
 */
class AuthenticationMethodTargetTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationMethodTargetType
     */

    /**
     * Select specific AuthenticationMethodTargetType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
