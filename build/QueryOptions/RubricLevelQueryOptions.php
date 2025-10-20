<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RubricLevel resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - grading
 * - levelId
 */
class RubricLevelQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_GRADING = 'grading';
    public const FIELD_LEVEL_ID = 'levelId';

    /**
     * Select specific RubricLevel properties
     * 
     * @param array<string> $select Use RubricLevelQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
