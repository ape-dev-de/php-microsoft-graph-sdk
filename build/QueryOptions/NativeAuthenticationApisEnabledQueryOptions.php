<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for NativeAuthenticationApisEnabled resources
 *
 * Available select fields:
 */
class NativeAuthenticationApisEnabledQueryOptions extends QueryOptions
{
    /**
     * Available select fields for NativeAuthenticationApisEnabled
     */

    /**
     * Select specific NativeAuthenticationApisEnabled properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
