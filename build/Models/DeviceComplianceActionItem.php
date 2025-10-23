<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceComplianceActionItem
 */
class DeviceComplianceActionItem
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?DeviceComplianceActionType $actionType = null;

    /** Number of hours to wait till the action will be enforced. Valid values 0 to 8760 */
    public ?float $gracePeriodHours = null;

    /** 
     * A list of group IDs to speicify who to CC this notification message to.
     * @var string[]
     */
    public array $notificationMessageCCList = [];

    /** What notification Message template to use */
    public ?string $notificationTemplateId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['actionType'])) {
            $this->actionType = $data['actionType'];
        }
        if (isset($data['gracePeriodHours'])) {
            $this->gracePeriodHours = $data['gracePeriodHours'];
        }
        if (isset($data['notificationMessageCCList'])) {
            $this->notificationMessageCCList = $data['notificationMessageCCList'];
        }
        if (isset($data['notificationTemplateId'])) {
            $this->notificationTemplateId = $data['notificationTemplateId'];
        }
    }
}
