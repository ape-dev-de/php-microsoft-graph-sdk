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
    /**
     * Available select fields for IdentityGovernanceParameter
     */
    public const FIELD_NAME = 'name';
    public const FIELD_VALUES = 'values';
    public const FIELD_VALUE_TYPE = 'valueType';

    /**
     * Select specific IdentityGovernanceParameter properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
