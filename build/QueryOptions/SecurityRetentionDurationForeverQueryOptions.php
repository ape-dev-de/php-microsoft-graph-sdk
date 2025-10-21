<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityRetentionDurationForever resources
 *
 * Available select fields:
 */
class SecurityRetentionDurationForeverQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityRetentionDurationForever
     */

    /**
     * Select specific SecurityRetentionDurationForever properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
