<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityRetentionEvent resources
 *
 * Available select fields:
 */
class SecurityRetentionEventQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityRetentionEvent
     */

    /**
     * Select specific SecurityRetentionEvent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
