<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookCommentReplyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WorkbookCommentReplyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WorkbookCommentReplyCollectionResponse properties
     * 
     * @param array<string> $select Use WorkbookCommentReplyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
