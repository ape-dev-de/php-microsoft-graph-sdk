<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LifecycleEventType resources
 *
 * Available select fields:
 */
class LifecycleEventTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LifecycleEventType
     */

    /**
     * Select specific LifecycleEventType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
