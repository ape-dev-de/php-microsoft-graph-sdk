<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationFeedbackResourceOutcome
 */
class EducationFeedbackResourceOutcome
{
    /**
     * The actual feedback resource.
     */
    private ?string $feedbackResource;

    /**
     * The status of the feedback resource. The possible values are: notPublished, pendingPublish, published, failedPublish, unknownFutureValue.
     */
    private ?string $resourceStatus;

    public function getFeedbackResource(): ?string
    {
        return $this->feedbackResource;
    }

    public function setFeedbackResource(?string $feedbackResource): self
    {
        $this->feedbackResource = $feedbackResource;
        return $this;
    }

    public function getResourceStatus(): ?string
    {
        return $this->resourceStatus;
    }

    public function setResourceStatus(?string $resourceStatus): self
    {
        $this->resourceStatus = $resourceStatus;
        return $this;
    }

}
