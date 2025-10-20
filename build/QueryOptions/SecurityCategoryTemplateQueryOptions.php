<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityCategoryTemplate resources
 *
 * Available select fields:
 * - subcategories
 */
class SecurityCategoryTemplateQueryOptions extends QueryOptions
{
    public const FIELD_SUBCATEGORIES = 'subcategories';

    /**
     * Select specific SecurityCategoryTemplate properties
     * 
     * @param array<string> $select Use SecurityCategoryTemplateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
