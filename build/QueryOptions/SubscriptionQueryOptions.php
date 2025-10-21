<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Subscription resources
 *
 * Available select fields:
 */
class SubscriptionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Subscription
     */

    /**
     * Select specific Subscription properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
