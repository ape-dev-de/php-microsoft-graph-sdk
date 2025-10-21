<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ApprovalFilterByCurrentUserOptions resources
 *
 * Available select fields:
 */
class ApprovalFilterByCurrentUserOptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ApprovalFilterByCurrentUserOptions
     */

    /**
     * Select specific ApprovalFilterByCurrentUserOptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
