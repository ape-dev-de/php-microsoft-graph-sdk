<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LearningSelfInitiatedCourse
 */
class LearningSelfInitiatedCourse
{
    /**
     * The date and time on which the learner started the self-initiated course. Optional.
     */
    private ?\DateTimeInterface $startedDateTime;


    public function getStartedDateTime(): ?\DateTimeInterface
    {
        return $this->startedDateTime;
    }

    public function setStartedDateTime(?\DateTimeInterface $startedDateTime): self
    {
        $this->startedDateTime = $startedDateTime;
        return $this;
    }

}
