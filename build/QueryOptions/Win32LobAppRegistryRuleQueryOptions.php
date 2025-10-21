<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppRegistryRule resources
 *
 * Available select fields:
 * - check32BitOn64System
 * - comparisonValue
 * - keyPath
 * - operationType
 * - operator
 * - valueName
 */
class Win32LobAppRegistryRuleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Win32LobAppRegistryRule
     */
    public const FIELD_CHECK32BIT_ON64SYSTEM = 'check32BitOn64System';
    public const FIELD_COMPARISON_VALUE = 'comparisonValue';
    public const FIELD_KEY_PATH = 'keyPath';
    public const FIELD_OPERATION_TYPE = 'operationType';
    public const FIELD_OPERATOR = 'operator';
    public const FIELD_VALUE_NAME = 'valueName';

    /**
     * Select specific Win32LobAppRegistryRule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
