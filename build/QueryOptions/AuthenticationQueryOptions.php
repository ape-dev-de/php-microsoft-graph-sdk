<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Authentication resources
 *
 * Available select fields:
 */
class AuthenticationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Authentication
     */

    /**
     * Select specific Authentication properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
