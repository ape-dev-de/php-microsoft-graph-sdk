<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceComplianceActionItem
 */
class DeviceComplianceActionItem
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $actionType = null,
        /** Number of hours to wait till the action will be enforced. Valid values 0 to 8760 */
        public ?float $gracePeriodHours = null,
        /** @var string[] A list of group IDs to speicify who to CC this notification message to. */
        public array $notificationMessageCCList = [],
        /** What notification Message template to use */
        public ?string $notificationTemplateId = null
    ) {}
}
