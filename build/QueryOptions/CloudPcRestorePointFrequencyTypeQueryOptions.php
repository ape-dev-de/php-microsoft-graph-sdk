<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcRestorePointFrequencyType resources
 *
 * Available select fields:
 */
class CloudPcRestorePointFrequencyTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcRestorePointFrequencyType
     */

    /**
     * Select specific CloudPcRestorePointFrequencyType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
