<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RegistryKeyState resources
 *
 * Available select fields:
 * - hive
 * - key
 * - oldKey
 * - oldValueData
 * - oldValueName
 * - operation
 * - processId
 * - valueData
 * - valueName
 * - valueType
 */
class RegistryKeyStateQueryOptions extends QueryOptions
{
    public const FIELD_HIVE = 'hive';
    public const FIELD_KEY = 'key';
    public const FIELD_OLD_KEY = 'oldKey';
    public const FIELD_OLD_VALUE_DATA = 'oldValueData';
    public const FIELD_OLD_VALUE_NAME = 'oldValueName';
    public const FIELD_OPERATION = 'operation';
    public const FIELD_PROCESS_ID = 'processId';
    public const FIELD_VALUE_DATA = 'valueData';
    public const FIELD_VALUE_NAME = 'valueName';
    public const FIELD_VALUE_TYPE = 'valueType';

    /**
     * Select specific RegistryKeyState properties
     * 
     * @param array<string> $select Use RegistryKeyStateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
