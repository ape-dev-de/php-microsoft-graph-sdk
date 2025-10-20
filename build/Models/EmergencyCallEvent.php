<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmergencyCallEvent
 */
class EmergencyCallEvent
{
    /**
     */
    private ?string $callerInfo;

    /**
     */
    private ?string $emergencyNumberDialed;

    /**
     */
    private ?string $policyName;

    public function getCallerInfo(): ?string
    {
        return $this->callerInfo;
    }

    public function setCallerInfo(?string $callerInfo): self
    {
        $this->callerInfo = $callerInfo;
        return $this;
    }

    public function getEmergencyNumberDialed(): ?string
    {
        return $this->emergencyNumberDialed;
    }

    public function setEmergencyNumberDialed(?string $emergencyNumberDialed): self
    {
        $this->emergencyNumberDialed = $emergencyNumberDialed;
        return $this;
    }

    public function getPolicyName(): ?string
    {
        return $this->policyName;
    }

    public function setPolicyName(?string $policyName): self
    {
        $this->policyName = $policyName;
        return $this;
    }

}
