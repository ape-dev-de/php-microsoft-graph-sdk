<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationCategory resources
 *
 * Available select fields:
 * - displayName
 */
class EducationCategoryQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';

    /**
     * Select specific EducationCategory properties
     * 
     * @param array<string> $select Use EducationCategoryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
