<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookComment resources
 *
 * Available select fields:
 * - content
 * - contentType
 * - replies
 */
class WorkbookCommentQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT = 'content';
    public const FIELD_CONTENT_TYPE = 'contentType';
    public const FIELD_REPLIES = 'replies';

    /**
     * Select specific WorkbookComment properties
     * 
     * @param array<string> $select Use WorkbookCommentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
