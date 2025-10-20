<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubjectRightsRequestHistory
 */
class SubjectRightsRequestHistory
{
    /**
     * Identity of the user who changed the  subject rights request.
     */
    private ?string $changedBy;

    /**
     * Data and time when the entity was changed.
     */
    private ?\DateTimeInterface $eventDateTime;

    /**
     * The stage when the entity was changed. Possible values are: contentRetrieval, contentReview, generateReport, contentDeletion, caseResolved, unknownFutureValue, approval. Use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: approval.
     */
    private ?string $stage;

    /**
     * The status of the stage when the entity was changed. Possible values are: notStarted, current, completed, failed, unknownFutureValue.
     */
    private ?string $stageStatus;

    /**
     * Type of history.
     */
    private ?string $type;

    public function getChangedBy(): ?string
    {
        return $this->changedBy;
    }

    public function setChangedBy(?string $changedBy): self
    {
        $this->changedBy = $changedBy;
        return $this;
    }

    public function getEventDateTime(): ?\DateTimeInterface
    {
        return $this->eventDateTime;
    }

    public function setEventDateTime(?\DateTimeInterface $eventDateTime): self
    {
        $this->eventDateTime = $eventDateTime;
        return $this;
    }

    public function getStage(): ?string
    {
        return $this->stage;
    }

    public function setStage(?string $stage): self
    {
        $this->stage = $stage;
        return $this;
    }

    public function getStageStatus(): ?string
    {
        return $this->stageStatus;
    }

    public function setStageStatus(?string $stageStatus): self
    {
        $this->stageStatus = $stageStatus;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

}
