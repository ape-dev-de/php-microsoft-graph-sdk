<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcUserSettingAssignment resources
 *
 * Available select fields:
 * - createdDateTime
 * - target
 */
class CloudPcUserSettingAssignmentQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_TARGET = 'target';

    /**
     * Select specific CloudPcUserSettingAssignment properties
     * 
     * @param array<string> $select Use CloudPcUserSettingAssignmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
