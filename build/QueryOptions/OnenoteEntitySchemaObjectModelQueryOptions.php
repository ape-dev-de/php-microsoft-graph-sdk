<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnenoteEntitySchemaObjectModel resources
 *
 * Available select fields:
 * - createdDateTime
 */
class OnenoteEntitySchemaObjectModelQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';

    /**
     * Select specific OnenoteEntitySchemaObjectModel properties
     * 
     * @param array<string> $select Use OnenoteEntitySchemaObjectModelQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
