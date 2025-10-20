<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PermissionGrantPolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PermissionGrantPolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PermissionGrantPolicyCollectionResponse properties
     * 
     * @param array<string> $select Use PermissionGrantPolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
