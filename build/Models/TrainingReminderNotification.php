<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TrainingReminderNotification
 */
class TrainingReminderNotification
{
    /**
     * Configurable frequency for the reminder email introduced during simulation creation. Possible values are: unknown, weekly, biWeekly, unknownFutureValue.
     */
    private ?string $deliveryFrequency;

    public function getDeliveryFrequency(): ?string
    {
        return $this->deliveryFrequency;
    }

    public function setDeliveryFrequency(?string $deliveryFrequency): self
    {
        $this->deliveryFrequency = $deliveryFrequency;
        return $this;
    }

}
