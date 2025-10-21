<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProtectionUnitsBulkJobStatus resources
 *
 * Available select fields:
 */
class ProtectionUnitsBulkJobStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProtectionUnitsBulkJobStatus
     */

    /**
     * Select specific ProtectionUnitsBulkJobStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
