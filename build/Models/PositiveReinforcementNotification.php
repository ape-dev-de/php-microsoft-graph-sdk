<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PositiveReinforcementNotification
 */
class PositiveReinforcementNotification
{
    /**
     * Delivery preference. Possible values are: unknown, deliverImmedietly, deliverAfterCampaignEnd, unknownFutureValue.
     */
    private ?string $deliveryPreference;


    public function getDeliveryPreference(): ?string
    {
        return $this->deliveryPreference;
    }

    public function setDeliveryPreference(?string $deliveryPreference): self
    {
        $this->deliveryPreference = $deliveryPreference;
        return $this;
    }

}
