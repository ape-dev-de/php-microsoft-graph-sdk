<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsUpdateActiveHoursInstall
 */
class WindowsUpdateActiveHoursInstall
{
    /**
     * Active Hours End
     */
    private ?string $activeHoursEnd;

    /**
     * Active Hours Start
     */
    private ?string $activeHoursStart;

    public function getActiveHoursEnd(): ?string
    {
        return $this->activeHoursEnd;
    }

    public function setActiveHoursEnd(?string $activeHoursEnd): self
    {
        $this->activeHoursEnd = $activeHoursEnd;
        return $this;
    }

    public function getActiveHoursStart(): ?string
    {
        return $this->activeHoursStart;
    }

    public function setActiveHoursStart(?string $activeHoursStart): self
    {
        $this->activeHoursStart = $activeHoursStart;
        return $this;
    }

}
