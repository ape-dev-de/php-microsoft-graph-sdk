<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for QuarantineReason resources
 *
 * Available select fields:
 */
class QuarantineReasonQueryOptions extends QueryOptions
{
    /**
     * Available select fields for QuarantineReason
     */

    /**
     * Select specific QuarantineReason properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
