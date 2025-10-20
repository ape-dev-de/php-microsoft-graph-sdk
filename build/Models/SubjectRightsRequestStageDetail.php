<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubjectRightsRequestStageDetail
 */
class SubjectRightsRequestStageDetail
{
    /**
     * Describes the error, if any, for the current stage.
     */
    private ?string $error;

    /**
     * The stage of the subject rights request. Possible values are: contentRetrieval, contentReview, generateReport, contentDeletion, caseResolved, unknownFutureValue, approval. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: approval.
     */
    private ?string $stage;

    /**
     * Status of the current stage. Possible values are: notStarted, current, completed, failed, unknownFutureValue.
     */
    private ?string $status;

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->error = $error;
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
