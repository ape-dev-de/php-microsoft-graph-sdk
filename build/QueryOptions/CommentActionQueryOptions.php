<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CommentAction resources
 *
 * Available select fields:
 * - isReply
 * - parentAuthor
 * - participants
 */
class CommentActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CommentAction
     */
    public const FIELD_IS_REPLY = 'isReply';
    public const FIELD_PARENT_AUTHOR = 'parentAuthor';
    public const FIELD_PARTICIPANTS = 'participants';

    /**
     * Select specific CommentAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
