<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedPermissionClassificationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DelegatedPermissionClassificationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DelegatedPermissionClassificationCollectionResponse properties
     * 
     * @param array<string> $select Use DelegatedPermissionClassificationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
