<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationPhoneType resources
 *
 * Available select fields:
 */
class AuthenticationPhoneTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationPhoneType
     */

    /**
     * Select specific AuthenticationPhoneType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
