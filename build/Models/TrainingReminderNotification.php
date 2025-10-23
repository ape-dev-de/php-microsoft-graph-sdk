<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TrainingReminderNotification
 */
class TrainingReminderNotification
{
    /** The default language for the end user notification. */
    public ?string $defaultLanguage = null;

    /** 
     * 
     * @var EndUserNotification|\stdClass|null
     */
    public mixed $endUserNotification = null;

    /** 
     * Configurable frequency for the reminder email introduced during simulation creation. Possible values are: unknown, weekly, biWeekly, unknownFutureValue.
     * @var NotificationDeliveryFrequency|\stdClass|null
     */
    public mixed $deliveryFrequency = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['defaultLanguage'])) {
            $this->defaultLanguage = $data['defaultLanguage'];
        }
        if (isset($data['endUserNotification'])) {
            $this->endUserNotification = is_array($data['endUserNotification']) ? new EndUserNotification($data['endUserNotification']) : $data['endUserNotification'];
        }
        if (isset($data['deliveryFrequency'])) {
            $this->deliveryFrequency = is_array($data['deliveryFrequency']) ? new NotificationDeliveryFrequency($data['deliveryFrequency']) : $data['deliveryFrequency'];
        }
    }
}
