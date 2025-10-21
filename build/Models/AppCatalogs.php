<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppCatalogs
 */
class AppCatalogs
{
    /**
     * @var string[]
     */
    private array $teamsApps = [];


    /**
     * @return string[]
     */
    public function getTeamsApps(): array
    {
        return $this->teamsApps;
    }

    /**
     * @param string[] $teamsApps
     */
    public function setTeamsApps(array $teamsApps): self
    {
        $this->teamsApps = $teamsApps;
        return $this;
    }

}
