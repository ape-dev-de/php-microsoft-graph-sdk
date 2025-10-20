<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PermissionGrantConditionSetCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PermissionGrantConditionSetCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PermissionGrantConditionSetCollectionResponse properties
     * 
     * @param array<string> $select Use PermissionGrantConditionSetCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
