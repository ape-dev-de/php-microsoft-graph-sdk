<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsHelloForBusinessAuthenticationMethod resources
 *
 * Available select fields:
 */
class WindowsHelloForBusinessAuthenticationMethodQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsHelloForBusinessAuthenticationMethod
     */

    /**
     * Select specific WindowsHelloForBusinessAuthenticationMethod properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
