<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEdiscoveryCaseSettings
 */
class SecurityEdiscoveryCaseSettings
{
    /**
     */
    private ?string $caseType;

    /**
     * The OCR (Optical Character Recognition) settings for the case.
     */
    private ?string $ocr;

    /**
     * The redundancy (near duplicate and email threading) detection settings for the case.
     */
    private ?string $redundancyDetection;

    /**
     * The settings of the review set for the case. Possible values are: none, disableGrouping, unknownFutureValue.
     */
    private ?string $reviewSetSettings;

    /**
     * The Topic Modeling (Themes) settings for the case.
     */
    private ?string $topicModeling;


    public function getCaseType(): ?string
    {
        return $this->caseType;
    }

    public function setCaseType(?string $caseType): self
    {
        $this->caseType = $caseType;
        return $this;
    }

    public function getOcr(): ?string
    {
        return $this->ocr;
    }

    public function setOcr(?string $ocr): self
    {
        $this->ocr = $ocr;
        return $this;
    }

    public function getRedundancyDetection(): ?string
    {
        return $this->redundancyDetection;
    }

    public function setRedundancyDetection(?string $redundancyDetection): self
    {
        $this->redundancyDetection = $redundancyDetection;
        return $this;
    }

    public function getReviewSetSettings(): ?string
    {
        return $this->reviewSetSettings;
    }

    public function setReviewSetSettings(?string $reviewSetSettings): self
    {
        $this->reviewSetSettings = $reviewSetSettings;
        return $this;
    }

    public function getTopicModeling(): ?string
    {
        return $this->topicModeling;
    }

    public function setTopicModeling(?string $topicModeling): self
    {
        $this->topicModeling = $topicModeling;
        return $this;
    }

}
