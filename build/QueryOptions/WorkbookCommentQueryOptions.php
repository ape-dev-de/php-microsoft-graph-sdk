<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookComment resources
 *
 * Available select fields:
 */
class WorkbookCommentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookComment
     */

    /**
     * Select specific WorkbookComment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
