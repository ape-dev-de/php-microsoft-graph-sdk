<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppFlaggedReason resources
 *
 * Available select fields:
 */
class ManagedAppFlaggedReasonQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedAppFlaggedReason
     */

    /**
     * Select specific ManagedAppFlaggedReason properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
