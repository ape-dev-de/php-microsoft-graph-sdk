<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySubcategoryTemplateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecuritySubcategoryTemplateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecuritySubcategoryTemplateCollectionResponse properties
     * 
     * @param array<string> $select Use SecuritySubcategoryTemplateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
