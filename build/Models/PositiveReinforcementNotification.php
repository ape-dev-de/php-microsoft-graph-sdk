<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PositiveReinforcementNotification
 */
class PositiveReinforcementNotification
{
    /** The default language for the end user notification. */
    public ?string $defaultLanguage = null;

    /** 
     * 
     * @var EndUserNotification|\stdClass|null
     */
    public mixed $endUserNotification = null;

    /** 
     * Delivery preference. Possible values are: unknown, deliverImmedietly, deliverAfterCampaignEnd, unknownFutureValue.
     * @var NotificationDeliveryPreference|\stdClass|null
     */
    public mixed $deliveryPreference = null;


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
            $this->endUserNotification = $data['endUserNotification'];
        }
        if (isset($data['deliveryPreference'])) {
            $this->deliveryPreference = $data['deliveryPreference'];
        }
    }
}
