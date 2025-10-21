<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCvssSummary
 */
class SecurityCvssSummary
{
    /**
     * The CVSS score about this vulnerability.
     */
    private ?string $score;

    /**
     * The CVSS severity rating for this vulnerability. The possible values are: none, low, medium, high, critical, unknownFutureValue.
     */
    private ?string $severity;

    /**
     * The CVSS vector string for this vulnerability.
     */
    private ?string $vectorString;


    public function getScore(): ?string
    {
        return $this->score;
    }

    public function setScore(?string $score): self
    {
        $this->score = $score;
        return $this;
    }

    public function getSeverity(): ?string
    {
        return $this->severity;
    }

    public function setSeverity(?string $severity): self
    {
        $this->severity = $severity;
        return $this;
    }

    public function getVectorString(): ?string
    {
        return $this->vectorString;
    }

    public function setVectorString(?string $vectorString): self
    {
        $this->vectorString = $vectorString;
        return $this;
    }

}
