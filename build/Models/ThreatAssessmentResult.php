<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ThreatAssessmentResult
 */
class ThreatAssessmentResult
{
    /**
     * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The result message for each threat assessment.
     */
    private ?string $message;

    /**
     * The threat assessment result type. Possible values are: checkPolicy, rescan.
     */
    private ?string $resultType;

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    public function getResultType(): ?string
    {
        return $this->resultType;
    }

    public function setResultType(?string $resultType): self
    {
        $this->resultType = $resultType;
        return $this;
    }

}
