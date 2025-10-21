<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceHealthIssue resources
 *
 * Available select fields:
 */
class ServiceHealthIssueQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServiceHealthIssue
     */

    /**
     * Select specific ServiceHealthIssue properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
