<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PositiveReinforcementNotification
 */
class PositiveReinforcementNotification
{
    public function __construct(
        /** Delivery preference. Possible values are: unknown, deliverImmedietly, deliverAfterCampaignEnd, unknownFutureValue. */
        public ?string $deliveryPreference = null
    ) {}
}
