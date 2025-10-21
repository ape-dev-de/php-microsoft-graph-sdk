<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DisableReason resources
 *
 * Available select fields:
 */
class DisableReasonQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DisableReason
     */

    /**
     * Select specific DisableReason properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
