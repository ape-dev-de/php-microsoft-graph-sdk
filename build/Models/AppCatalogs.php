<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppCatalogs
 */
class AppCatalogs
{
    /**
     */
    private ?string $teamsApps;

    public function getTeamsApps(): ?string
    {
        return $this->teamsApps;
    }

    public function setTeamsApps(?string $teamsApps): self
    {
        $this->teamsApps = $teamsApps;
        return $this;
    }

}
