<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppInstallation
 */
class TeamsAppInstallation
{
    /**
     * The set of resource-specific permissions consented to while installing or upgrading the teamsApp.
     */
    private ?string $consentedPermissionSet;

    /**
     * The app that is installed.
     */
    private ?string $teamsApp;

    /**
     * The details of this version of the app.
     */
    private ?string $teamsAppDefinition;

    public function getConsentedPermissionSet(): ?string
    {
        return $this->consentedPermissionSet;
    }

    public function setConsentedPermissionSet(?string $consentedPermissionSet): self
    {
        $this->consentedPermissionSet = $consentedPermissionSet;
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

    public function getTeamsAppDefinition(): ?string
    {
        return $this->teamsAppDefinition;
    }

    public function setTeamsAppDefinition(?string $teamsAppDefinition): self
    {
        $this->teamsAppDefinition = $teamsAppDefinition;
        return $this;
    }

}
