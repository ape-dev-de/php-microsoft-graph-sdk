<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHealthIssue resources
 *
 * Available select fields:
 */
class SecurityHealthIssueQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHealthIssue
     */

    /**
     * Select specific SecurityHealthIssue properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
