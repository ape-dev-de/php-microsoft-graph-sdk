<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InformationProtection
 */
class InformationProtection
{
    /**
     */
    private ?string $bitlocker;

    /**
     */
    private ?string $threatAssessmentRequests;

    public function getBitlocker(): ?string
    {
        return $this->bitlocker;
    }

    public function setBitlocker(?string $bitlocker): self
    {
        $this->bitlocker = $bitlocker;
        return $this;
    }

    public function getThreatAssessmentRequests(): ?string
    {
        return $this->threatAssessmentRequests;
    }

    public function setThreatAssessmentRequests(?string $threatAssessmentRequests): self
    {
        $this->threatAssessmentRequests = $threatAssessmentRequests;
        return $this;
    }

}
