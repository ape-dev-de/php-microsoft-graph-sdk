<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityCategoryTemplateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityCategoryTemplateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityCategoryTemplateCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityCategoryTemplateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
