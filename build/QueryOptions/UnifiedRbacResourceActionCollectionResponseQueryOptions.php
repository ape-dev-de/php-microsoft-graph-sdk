<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRbacResourceActionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UnifiedRbacResourceActionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UnifiedRbacResourceActionCollectionResponse properties
     * 
     * @param array<string> $select Use UnifiedRbacResourceActionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
