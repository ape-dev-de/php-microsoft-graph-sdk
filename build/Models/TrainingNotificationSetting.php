<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TrainingNotificationSetting
 */
class TrainingNotificationSetting
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Notification preference. Possible values are: unknown, microsoft, custom, unknownFutureValue.
     * @var EndUserNotificationPreference|\stdClass|null
     */
    public EndUserNotificationPreference|\stdClass|null $notificationPreference = null;

    /** 
     * Positive reinforcement detail.
     * @var PositiveReinforcementNotification|\stdClass|null
     */
    public PositiveReinforcementNotification|\stdClass|null $positiveReinforcement = null;

    /** 
     * End user notification type. Possible values are: unknown, noTraining, trainingSelected, noNotification, unknownFutureValue.
     * @var EndUserNotificationSettingType|\stdClass|null
     */
    public EndUserNotificationSettingType|\stdClass|null $settingType = null;

    /** 
     * Training assignment details.
     * @var BaseEndUserNotification|\stdClass|null
     */
    public BaseEndUserNotification|\stdClass|null $trainingAssignment = null;

    /** 
     * Training reminder details.
     * @var TrainingReminderNotification|\stdClass|null
     */
    public TrainingReminderNotification|\stdClass|null $trainingReminder = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['notificationPreference'])) {
            $this->notificationPreference = is_string($data['notificationPreference']) ? EndUserNotificationPreference::tryFrom($data['notificationPreference']) : $data['notificationPreference'];
        }
        if (isset($data['positiveReinforcement'])) {
            $this->positiveReinforcement = is_array($data['positiveReinforcement']) ? new PositiveReinforcementNotification($data['positiveReinforcement']) : $data['positiveReinforcement'];
        }
        if (isset($data['settingType'])) {
            $this->settingType = is_string($data['settingType']) ? EndUserNotificationSettingType::tryFrom($data['settingType']) : $data['settingType'];
        }
        if (isset($data['trainingAssignment'])) {
            $this->trainingAssignment = is_array($data['trainingAssignment']) ? new BaseEndUserNotification($data['trainingAssignment']) : $data['trainingAssignment'];
        }
        if (isset($data['trainingReminder'])) {
            $this->trainingReminder = is_array($data['trainingReminder']) ? new TrainingReminderNotification($data['trainingReminder']) : $data['trainingReminder'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
