<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProtectionRuleBase resources
 *
 * Available select fields:
 * - createdBy
 * - createdDateTime
 * - error
 * - isAutoApplyEnabled
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - status
 */
class ProtectionRuleBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ProtectionRuleBase
     */
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_ERROR = 'error';
    public const FIELD_IS_AUTO_APPLY_ENABLED = 'isAutoApplyEnabled';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific ProtectionRuleBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
