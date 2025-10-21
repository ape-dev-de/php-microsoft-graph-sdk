<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityRetentionEventType resources
 *
 * Available select fields:
 */
class SecurityRetentionEventTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityRetentionEventType
     */

    /**
     * Select specific SecurityRetentionEventType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
