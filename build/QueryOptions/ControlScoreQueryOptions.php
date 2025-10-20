<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ControlScore resources
 *
 * Available select fields:
 * - controlCategory
 * - controlName
 * - description
 * - score
 */
class ControlScoreQueryOptions extends QueryOptions
{
    public const FIELD_CONTROL_CATEGORY = 'controlCategory';
    public const FIELD_CONTROL_NAME = 'controlName';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_SCORE = 'score';

    /**
     * Select specific ControlScore properties
     * 
     * @param array<string> $select Use ControlScoreQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
