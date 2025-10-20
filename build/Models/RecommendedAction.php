<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RecommendedAction
 */
class RecommendedAction
{
    /**
     * Web URL to the recommended action.
     */
    private ?string $actionWebUrl;

    /**
     * Potential improvement in the tenant security score from the recommended action.
     */
    private ?string $potentialScoreImpact;

    /**
     * Title of the recommended action.
     */
    private ?string $title;

    public function getActionWebUrl(): ?string
    {
        return $this->actionWebUrl;
    }

    public function setActionWebUrl(?string $actionWebUrl): self
    {
        $this->actionWebUrl = $actionWebUrl;
        return $this;
    }

    public function getPotentialScoreImpact(): ?string
    {
        return $this->potentialScoreImpact;
    }

    public function setPotentialScoreImpact(?string $potentialScoreImpact): self
    {
        $this->potentialScoreImpact = $potentialScoreImpact;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

}
