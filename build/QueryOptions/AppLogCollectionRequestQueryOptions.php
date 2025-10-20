<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppLogCollectionRequest resources
 *
 * Available select fields:
 * - completedDateTime
 * - customLogFolders
 * - errorMessage
 * - status
 */
class AppLogCollectionRequestQueryOptions extends QueryOptions
{
    public const FIELD_COMPLETED_DATE_TIME = 'completedDateTime';
    public const FIELD_CUSTOM_LOG_FOLDERS = 'customLogFolders';
    public const FIELD_ERROR_MESSAGE = 'errorMessage';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific AppLogCollectionRequest properties
     * 
     * @param array<string> $select Use AppLogCollectionRequestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
