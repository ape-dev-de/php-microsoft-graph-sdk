<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TokenIssuerType resources
 *
 * Available select fields:
 */
class TokenIssuerTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TokenIssuerType
     */

    /**
     * Select specific TokenIssuerType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
