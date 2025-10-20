<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EndUserNotificationSetting
 */
class EndUserNotificationSetting
{
    /**
     * Notification preference. Possible values are: unknown, microsoft, custom, unknownFutureValue.
     */
    private ?string $notificationPreference;

    /**
     * Positive reinforcement detail.
     */
    private ?string $positiveReinforcement;

    /**
     * End user notification type. Possible values are: unknown, noTraining, trainingSelected, noNotification, unknownFutureValue.
     */
    private ?string $settingType;

    public function getNotificationPreference(): ?string
    {
        return $this->notificationPreference;
    }

    public function setNotificationPreference(?string $notificationPreference): self
    {
        $this->notificationPreference = $notificationPreference;
        return $this;
    }

    public function getPositiveReinforcement(): ?string
    {
        return $this->positiveReinforcement;
    }

    public function setPositiveReinforcement(?string $positiveReinforcement): self
    {
        $this->positiveReinforcement = $positiveReinforcement;
        return $this;
    }

    public function getSettingType(): ?string
    {
        return $this->settingType;
    }

    public function setSettingType(?string $settingType): self
    {
        $this->settingType = $settingType;
        return $this;
    }

}
