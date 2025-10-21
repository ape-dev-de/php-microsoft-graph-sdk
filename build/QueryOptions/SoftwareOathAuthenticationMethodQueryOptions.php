<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SoftwareOathAuthenticationMethod resources
 *
 * Available select fields:
 */
class SoftwareOathAuthenticationMethodQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SoftwareOathAuthenticationMethod
     */

    /**
     * Select specific SoftwareOathAuthenticationMethod properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
