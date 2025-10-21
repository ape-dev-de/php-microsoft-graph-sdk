<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookCommentReply resources
 *
 * Available select fields:
 */
class WorkbookCommentReplyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookCommentReply
     */

    /**
     * Select specific WorkbookCommentReply properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
