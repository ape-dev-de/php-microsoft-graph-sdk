<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnPremisesAccidentalDeletionPrevention
 */
class OnPremisesAccidentalDeletionPrevention
{
    /**
     * Threshold value which triggers accidental deletion prevention. The threshold is either an absolute number of objects or a percentage number of objects.
     */
    private ?float $alertThreshold;

    /**
     * The status of the accidental deletion prevention feature. The possible values are: disabled, enabledForCount, enabledForPercentage, unknownFutureValue.
     */
    private ?string $synchronizationPreventionType;

    public function getAlertThreshold(): ?float
    {
        return $this->alertThreshold;
    }

    public function setAlertThreshold(?float $alertThreshold): self
    {
        $this->alertThreshold = $alertThreshold;
        return $this;
    }

    public function getSynchronizationPreventionType(): ?string
    {
        return $this->synchronizationPreventionType;
    }

    public function setSynchronizationPreventionType(?string $synchronizationPreventionType): self
    {
        $this->synchronizationPreventionType = $synchronizationPreventionType;
        return $this;
    }

}
