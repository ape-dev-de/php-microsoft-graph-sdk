<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EngagementAsyncOperation resources
 *
 * Available select fields:
 */
class EngagementAsyncOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EngagementAsyncOperation
     */

    /**
     * Select specific EngagementAsyncOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
