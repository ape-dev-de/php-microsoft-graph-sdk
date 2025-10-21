<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PartnersBillingBillingReconciliation
 */
class PartnersBillingBillingReconciliation
{
    /**
     */
    private ?string $billed;

    /**
     */
    private ?string $unbilled;


    public function getBilled(): ?string
    {
        return $this->billed;
    }

    public function setBilled(?string $billed): self
    {
        $this->billed = $billed;
        return $this;
    }

    public function getUnbilled(): ?string
    {
        return $this->unbilled;
    }

    public function setUnbilled(?string $unbilled): self
    {
        $this->unbilled = $unbilled;
        return $this;
    }

}
