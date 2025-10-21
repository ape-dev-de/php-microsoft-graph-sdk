<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PositiveReinforcementNotification
 */
class PositiveReinforcementNotification
{
    public function __construct(
        /** The default language for the end user notification. */
        public ?string $defaultLanguage = null,
        /**  */
        public ?EndUserNotification $endUserNotification = null,
        /** Delivery preference. Possible values are: unknown, deliverImmedietly, deliverAfterCampaignEnd, unknownFutureValue. */
        public ?NotificationDeliveryPreference $deliveryPreference = null
    ) {}
}
