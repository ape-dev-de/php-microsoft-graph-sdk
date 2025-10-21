<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CompanySubscription resources
 *
 * Available select fields:
 */
class CompanySubscriptionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CompanySubscription
     */

    /**
     * Select specific CompanySubscription properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
