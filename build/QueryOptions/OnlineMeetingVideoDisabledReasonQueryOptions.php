<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnlineMeetingVideoDisabledReason resources
 *
 * Available select fields:
 */
class OnlineMeetingVideoDisabledReasonQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnlineMeetingVideoDisabledReason
     */

    /**
     * Select specific OnlineMeetingVideoDisabledReason properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
