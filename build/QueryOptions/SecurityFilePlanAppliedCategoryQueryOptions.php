<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFilePlanAppliedCategory resources
 *
 * Available select fields:
 * - subcategory
 */
class SecurityFilePlanAppliedCategoryQueryOptions extends QueryOptions
{
    public const FIELD_SUBCATEGORY = 'subcategory';

    /**
     * Select specific SecurityFilePlanAppliedCategory properties
     * 
     * @param array<string> $select Use SecurityFilePlanAppliedCategoryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
