<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceActionResult resources
 *
 * Available select fields:
 * - actionName
 * - actionState
 * - lastUpdatedDateTime
 * - startDateTime
 */
class DeviceActionResultQueryOptions extends QueryOptions
{
    public const FIELD_ACTION_NAME = 'actionName';
    public const FIELD_ACTION_STATE = 'actionState';
    public const FIELD_LAST_UPDATED_DATE_TIME = 'lastUpdatedDateTime';
    public const FIELD_START_DATE_TIME = 'startDateTime';

    /**
     * Select specific DeviceActionResult properties
     * 
     * @param array<string> $select Use DeviceActionResultQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
