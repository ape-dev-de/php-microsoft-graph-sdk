<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookCommentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WorkbookCommentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WorkbookCommentCollectionResponse properties
     * 
     * @param array<string> $select Use WorkbookCommentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
