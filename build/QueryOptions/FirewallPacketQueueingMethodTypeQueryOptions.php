<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FirewallPacketQueueingMethodType resources
 *
 * Available select fields:
 */
class FirewallPacketQueueingMethodTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FirewallPacketQueueingMethodType
     */

    /**
     * Select specific FirewallPacketQueueingMethodType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
