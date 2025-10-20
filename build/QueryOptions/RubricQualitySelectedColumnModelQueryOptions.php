<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RubricQualitySelectedColumnModel resources
 *
 * Available select fields:
 * - columnId
 * - qualityId
 */
class RubricQualitySelectedColumnModelQueryOptions extends QueryOptions
{
    public const FIELD_COLUMN_ID = 'columnId';
    public const FIELD_QUALITY_ID = 'qualityId';

    /**
     * Select specific RubricQualitySelectedColumnModel properties
     * 
     * @param array<string> $select Use RubricQualitySelectedColumnModelQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
