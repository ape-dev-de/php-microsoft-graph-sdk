<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DocumentSetVersionItem resources
 *
 * Available select fields:
 * - itemId
 * - title
 * - versionId
 */
class DocumentSetVersionItemQueryOptions extends QueryOptions
{
    public const FIELD_ITEM_ID = 'itemId';
    public const FIELD_TITLE = 'title';
    public const FIELD_VERSION_ID = 'versionId';

    /**
     * Select specific DocumentSetVersionItem properties
     * 
     * @param array<string> $select Use DocumentSetVersionItemQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
