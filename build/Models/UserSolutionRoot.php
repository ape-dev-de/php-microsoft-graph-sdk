<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSolutionRoot
 */
class UserSolutionRoot
{
    /**
     * The working time schedule entity associated with the solution.
     */
    private ?string $workingTimeSchedule;


    public function getWorkingTimeSchedule(): ?string
    {
        return $this->workingTimeSchedule;
    }

    public function setWorkingTimeSchedule(?string $workingTimeSchedule): self
    {
        $this->workingTimeSchedule = $workingTimeSchedule;
        return $this;
    }

}
