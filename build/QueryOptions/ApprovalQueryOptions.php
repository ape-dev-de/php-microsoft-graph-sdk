<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Approval resources
 *
 * Available select fields:
 */
class ApprovalQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Approval
     */

    /**
     * Select specific Approval properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
