<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DefenderScanType resources
 *
 * Available select fields:
 */
class DefenderScanTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DefenderScanType
     */

    /**
     * Select specific DefenderScanType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
