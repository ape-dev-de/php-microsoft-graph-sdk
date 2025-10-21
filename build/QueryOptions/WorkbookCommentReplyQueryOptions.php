<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookCommentReply resources
 *
 * Available select fields:
 * - content
 * - contentType
 */
class WorkbookCommentReplyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookCommentReply
     */
    public const FIELD_CONTENT = 'content';
    public const FIELD_CONTENT_TYPE = 'contentType';

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
