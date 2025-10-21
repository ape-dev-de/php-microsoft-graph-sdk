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
     * @var string[]
     */
    private array $threatAssessmentRequests = [];


    public function getBitlocker(): ?string
    {
        return $this->bitlocker;
    }

    public function setBitlocker(?string $bitlocker): self
    {
        $this->bitlocker = $bitlocker;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getThreatAssessmentRequests(): array
    {
        return $this->threatAssessmentRequests;
    }

    /**
     * @param string[] $threatAssessmentRequests
     */
    public function setThreatAssessmentRequests(array $threatAssessmentRequests): self
    {
        $this->threatAssessmentRequests = $threatAssessmentRequests;
        return $this;
    }

}
