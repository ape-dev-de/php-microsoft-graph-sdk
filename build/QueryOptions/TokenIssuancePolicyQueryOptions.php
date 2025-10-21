<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TokenIssuancePolicy resources
 *
 * Available select fields:
 */
class TokenIssuancePolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TokenIssuancePolicy
     */

    /**
     * Select specific TokenIssuancePolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
