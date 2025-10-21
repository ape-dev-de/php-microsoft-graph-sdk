<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceComplianceActionItem
 */
class DeviceComplianceActionItem
{
    /**
     */
    private ?string $actionType;

    /**
     * Number of hours to wait till the action will be enforced. Valid values 0 to 8760
     */
    private ?float $gracePeriodHours;

    /**
     * A list of group IDs to speicify who to CC this notification message to.
     * @var string[]
     */
    private array $notificationMessageCCList = [];

    /**
     * Scheduled Action Configuration
     */
    private ?string $notificationTemplateId;


    public function getActionType(): ?string
    {
        return $this->actionType;
    }

    public function setActionType(?string $actionType): self
    {
        $this->actionType = $actionType;
        return $this;
    }

    public function getGracePeriodHours(): ?float
    {
        return $this->gracePeriodHours;
    }

    public function setGracePeriodHours(?float $gracePeriodHours): self
    {
        $this->gracePeriodHours = $gracePeriodHours;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getNotificationMessageCCList(): array
    {
        return $this->notificationMessageCCList;
    }

    /**
     * @param string[] $notificationMessageCCList
     */
    public function setNotificationMessageCCList(array $notificationMessageCCList): self
    {
        $this->notificationMessageCCList = $notificationMessageCCList;
        return $this;
    }

    public function getNotificationTemplateId(): ?string
    {
        return $this->notificationTemplateId;
    }

    public function setNotificationTemplateId(?string $notificationTemplateId): self
    {
        $this->notificationTemplateId = $notificationTemplateId;
        return $this;
    }

}
