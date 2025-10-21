<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppFileSystemRule resources
 *
 * Available select fields:
 * - check32BitOn64System
 * - comparisonValue
 * - fileOrFolderName
 * - operationType
 * - operator
 * - path
 */
class Win32LobAppFileSystemRuleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Win32LobAppFileSystemRule
     */
    public const FIELD_CHECK32BIT_ON64SYSTEM = 'check32BitOn64System';
    public const FIELD_COMPARISON_VALUE = 'comparisonValue';
    public const FIELD_FILE_OR_FOLDER_NAME = 'fileOrFolderName';
    public const FIELD_OPERATION_TYPE = 'operationType';
    public const FIELD_OPERATOR = 'operator';
    public const FIELD_PATH = 'path';

    /**
     * Select specific Win32LobAppFileSystemRule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
