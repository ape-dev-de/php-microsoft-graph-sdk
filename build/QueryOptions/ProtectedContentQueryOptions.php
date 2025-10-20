<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProtectedContent resources
 *
 * Available select fields:
 * - cid
 * - format
 * - labelId
 */
class ProtectedContentQueryOptions extends QueryOptions
{
    public const FIELD_CID = 'cid';
    public const FIELD_FORMAT = 'format';
    public const FIELD_LABEL_ID = 'labelId';

    /**
     * Select specific ProtectedContent properties
     * 
     * @param array<string> $select Use ProtectedContentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
