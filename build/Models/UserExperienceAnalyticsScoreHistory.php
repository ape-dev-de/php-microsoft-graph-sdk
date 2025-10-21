<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsScoreHistory
 */
class UserExperienceAnalyticsScoreHistory
{
    /**
     * The user experience analytics device startup score history.
     */
    private ?\DateTimeInterface $startupDateTime;


    public function getStartupDateTime(): ?\DateTimeInterface
    {
        return $this->startupDateTime;
    }

    public function setStartupDateTime(?\DateTimeInterface $startupDateTime): self
    {
        $this->startupDateTime = $startupDateTime;
        return $this;
    }

}
