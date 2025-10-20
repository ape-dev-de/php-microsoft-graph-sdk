<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCaseOperation
 */
class SecurityCaseOperation
{
    /**
     * The type of action the operation represents. Possible values are: contentExport,  applyTags, convertToPdf, index, estimateStatistics, addToReviewSet, holdUpdate, unknownFutureValue, purgeData, exportReport, exportResult. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: purgeData, exportReport, exportResult.
     */
    private ?string $action;

    /**
     * The date and time the operation was completed.
     */
    private ?\DateTimeInterface $completedDateTime;

    /**
     * The user that created the operation.
     */
    private ?string $createdBy;

    /**
     * The date and time the operation was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The progress of the operation.
     */
    private ?float $percentProgress;

    /**
     * Contains success and failure-specific result information.
     */
    private ?string $resultInfo;

    /**
     * The status of the case operation. Possible values are: notStarted, submissionFailed, running, succeeded, partiallySucceeded, failed.
     */
    private ?string $status;

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(?string $action): self
    {
        $this->action = $action;
        return $this;
    }

    public function getCompletedDateTime(): ?\DateTimeInterface
    {
        return $this->completedDateTime;
    }

    public function setCompletedDateTime(?\DateTimeInterface $completedDateTime): self
    {
        $this->completedDateTime = $completedDateTime;
        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getPercentProgress(): ?float
    {
        return $this->percentProgress;
    }

    public function setPercentProgress(?float $percentProgress): self
    {
        $this->percentProgress = $percentProgress;
        return $this;
    }

    public function getResultInfo(): ?string
    {
        return $this->resultInfo;
    }

    public function setResultInfo(?string $resultInfo): self
    {
        $this->resultInfo = $resultInfo;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

}
