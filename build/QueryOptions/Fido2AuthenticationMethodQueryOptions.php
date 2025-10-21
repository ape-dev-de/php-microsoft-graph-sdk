<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Fido2AuthenticationMethod resources
 *
 * Available select fields:
 */
class Fido2AuthenticationMethodQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Fido2AuthenticationMethod
     */

    /**
     * Select specific Fido2AuthenticationMethod properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
