<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RejectReason resources
 *
 * Available select fields:
 */
class RejectReasonQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RejectReason
     */

    /**
     * Select specific RejectReason properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
