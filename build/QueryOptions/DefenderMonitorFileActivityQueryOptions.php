<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DefenderMonitorFileActivity resources
 *
 * Available select fields:
 */
class DefenderMonitorFileActivityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DefenderMonitorFileActivity
     */

    /**
     * Select specific DefenderMonitorFileActivity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
