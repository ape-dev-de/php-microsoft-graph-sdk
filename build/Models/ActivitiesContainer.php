<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ActivitiesContainer
 */
class ActivitiesContainer
{
    /**
     * Collection of activity logs related to content processing.
     */
    private ?string $contentActivities;

    public function getContentActivities(): ?string
    {
        return $this->contentActivities;
    }

    public function setContentActivities(?string $contentActivities): self
    {
        $this->contentActivities = $contentActivities;
        return $this;
    }

}
