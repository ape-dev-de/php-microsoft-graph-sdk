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
     * @var EndUserNotificationPreference|\stdClass|null
     */
    public mixed $notificationPreference = null;

    /** 
     * Positive reinforcement detail.
     * @var PositiveReinforcementNotification|\stdClass|null
     */
    public mixed $positiveReinforcement = null;

    /** 
     * End user notification type. Possible values are: unknown, noTraining, trainingSelected, noNotification, unknownFutureValue.
     * @var EndUserNotificationSettingType|\stdClass|null
     */
    public mixed $settingType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['notificationPreference'])) {
            $this->notificationPreference = $data['notificationPreference'];
        }
        if (isset($data['positiveReinforcement'])) {
            $this->positiveReinforcement = $data['positiveReinforcement'];
        }
        if (isset($data['settingType'])) {
            $this->settingType = $data['settingType'];
        }
    }
}
