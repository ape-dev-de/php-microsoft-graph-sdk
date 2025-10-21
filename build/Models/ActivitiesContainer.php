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
     * @var string[]
     */
    private array $contentActivities = [];


    /**
     * @return string[]
     */
    public function getContentActivities(): array
    {
        return $this->contentActivities;
    }

    /**
     * @param string[] $contentActivities
     */
    public function setContentActivities(array $contentActivities): self
    {
        $this->contentActivities = $contentActivities;
        return $this;
    }

}
