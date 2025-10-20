<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRbacResourceNamespaceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UnifiedRbacResourceNamespaceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UnifiedRbacResourceNamespaceCollectionResponse properties
     * 
     * @param array<string> $select Use UnifiedRbacResourceNamespaceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
