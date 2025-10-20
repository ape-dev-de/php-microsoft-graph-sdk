<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RubricQuality resources
 *
 * Available select fields:
 * - criteria
 * - description
 * - displayName
 * - qualityId
 * - weight
 */
class RubricQualityQueryOptions extends QueryOptions
{
    public const FIELD_CRITERIA = 'criteria';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_QUALITY_ID = 'qualityId';
    public const FIELD_WEIGHT = 'weight';

    /**
     * Select specific RubricQuality properties
     * 
     * @param array<string> $select Use RubricQualityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
