<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationMethodTarget resources
 *
 * Available select fields:
 */
class AuthenticationMethodTargetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationMethodTarget
     */

    /**
     * Select specific AuthenticationMethodTarget properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
