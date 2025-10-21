<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHealthIssueType resources
 *
 * Available select fields:
 */
class SecurityHealthIssueTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHealthIssueType
     */

    /**
     * Select specific SecurityHealthIssueType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
