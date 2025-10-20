<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Process resources
 *
 * Available select fields:
 * - accountName
 * - commandLine
 * - createdDateTime
 * - fileHash
 * - integrityLevel
 * - isElevated
 * - name
 * - parentProcessCreatedDateTime
 * - parentProcessId
 * - parentProcessName
 * - path
 * - processId
 */
class ProcessQueryOptions extends QueryOptions
{
    public const FIELD_ACCOUNT_NAME = 'accountName';
    public const FIELD_COMMAND_LINE = 'commandLine';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_FILE_HASH = 'fileHash';
    public const FIELD_INTEGRITY_LEVEL = 'integrityLevel';
    public const FIELD_IS_ELEVATED = 'isElevated';
    public const FIELD_NAME = 'name';
    public const FIELD_PARENT_PROCESS_CREATED_DATE_TIME = 'parentProcessCreatedDateTime';
    public const FIELD_PARENT_PROCESS_ID = 'parentProcessId';
    public const FIELD_PARENT_PROCESS_NAME = 'parentProcessName';
    public const FIELD_PATH = 'path';
    public const FIELD_PROCESS_ID = 'processId';

    /**
     * Select specific Process properties
     * 
     * @param array<string> $select Use ProcessQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
