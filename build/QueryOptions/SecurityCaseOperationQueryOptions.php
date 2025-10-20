<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityCaseOperation resources
 *
 * Available select fields:
 * - action
 * - completedDateTime
 * - createdBy
 * - createdDateTime
 * - percentProgress
 * - resultInfo
 * - status
 */
class SecurityCaseOperationQueryOptions extends QueryOptions
{
    public const FIELD_ACTION = 'action';
    public const FIELD_COMPLETED_DATE_TIME = 'completedDateTime';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_PERCENT_PROGRESS = 'percentProgress';
    public const FIELD_RESULT_INFO = 'resultInfo';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific SecurityCaseOperation properties
     * 
     * @param array<string> $select Use SecurityCaseOperationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
