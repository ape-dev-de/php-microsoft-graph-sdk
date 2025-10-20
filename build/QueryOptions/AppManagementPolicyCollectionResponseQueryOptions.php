<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppManagementPolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AppManagementPolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AppManagementPolicyCollectionResponse properties
     * 
     * @param array<string> $select Use AppManagementPolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
