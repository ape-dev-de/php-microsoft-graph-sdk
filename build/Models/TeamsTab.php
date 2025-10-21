<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsTab
 */
class TeamsTab
{
    /**
     * Container for custom settings applied to a tab. The tab is considered configured only once this property is set.
     */
    private ?string $configuration;

    /**
     * Name of the tab.
     */
    private ?string $displayName;

    /**
     * Deep link URL of the tab instance. Read-only.
     */
    private ?string $webUrl;

    /**
     * The application that is linked to the tab. This can't be changed after tab creation.
     */
    private ?string $teamsApp;


    public function getConfiguration(): ?string
    {
        return $this->configuration;
    }

    public function setConfiguration(?string $configuration): self
    {
        $this->configuration = $configuration;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

    public function getTeamsApp(): ?string
    {
        return $this->teamsApp;
    }

    public function setTeamsApp(?string $teamsApp): self
    {
        $this->teamsApp = $teamsApp;
        return $this;
    }

}
