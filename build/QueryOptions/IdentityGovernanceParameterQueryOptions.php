<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceParameter resources
 *
 * Available select fields:
 * - name
 * - values
 * - valueType
 */
class IdentityGovernanceParameterQueryOptions extends QueryOptions
{
    public const FIELD_NAME = 'name';
    public const FIELD_VALUES = 'values';
    public const FIELD_VALUE_TYPE = 'valueType';

    /**
     * Select specific IdentityGovernanceParameter properties
     * 
     * @param array<string> $select Use IdentityGovernanceParameterQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
