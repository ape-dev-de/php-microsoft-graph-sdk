<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceComplianceActionItem resources
 *
 * Available select fields:
 * - actionType
 * - gracePeriodHours
 * - notificationMessageCCList
 * - notificationTemplateId
 */
class DeviceComplianceActionItemQueryOptions extends QueryOptions
{
    public const FIELD_ACTION_TYPE = 'actionType';
    public const FIELD_GRACE_PERIOD_HOURS = 'gracePeriodHours';
    public const FIELD_NOTIFICATION_MESSAGE_CCLIST = 'notificationMessageCCList';
    public const FIELD_NOTIFICATION_TEMPLATE_ID = 'notificationTemplateId';

    /**
     * Select specific DeviceComplianceActionItem properties
     * 
     * @param array<string> $select Use DeviceComplianceActionItemQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
