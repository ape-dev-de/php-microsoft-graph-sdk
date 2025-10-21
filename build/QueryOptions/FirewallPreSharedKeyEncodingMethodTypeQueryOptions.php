<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FirewallPreSharedKeyEncodingMethodType resources
 *
 * Available select fields:
 */
class FirewallPreSharedKeyEncodingMethodTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FirewallPreSharedKeyEncodingMethodType
     */

    /**
     * Select specific FirewallPreSharedKeyEncodingMethodType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
