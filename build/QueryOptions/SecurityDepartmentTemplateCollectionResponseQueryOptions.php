<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDepartmentTemplateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityDepartmentTemplateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityDepartmentTemplateCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityDepartmentTemplateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
