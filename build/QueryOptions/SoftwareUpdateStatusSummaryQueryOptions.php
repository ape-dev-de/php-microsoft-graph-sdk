<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SoftwareUpdateStatusSummary resources
 *
 * Available select fields:
 */
class SoftwareUpdateStatusSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SoftwareUpdateStatusSummary
     */

    /**
     * Select specific SoftwareUpdateStatusSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
