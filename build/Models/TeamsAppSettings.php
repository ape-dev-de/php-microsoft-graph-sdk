<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppSettings
 */
class TeamsAppSettings
{
    /**
     * Indicates whether users are allowed to request access to the unavailable Teams apps.
     */
    private ?bool $allowUserRequestsForAppAccess;

    /**
     * Indicates whether resource-specific consent for personal scope in Teams apps is enabled for the tenant. True indicates that Teams apps that are allowed in the tenant and require resource-specific permissions can be installed in the personal scope. False blocks the installation of any Teams app that requires resource-specific permissions in the personal scope.
     */
    private ?string $isUserPersonalScopeResourceSpecificConsentEnabled;


    public function getAllowUserRequestsForAppAccess(): ?bool
    {
        return $this->allowUserRequestsForAppAccess;
    }

    public function setAllowUserRequestsForAppAccess(?bool $allowUserRequestsForAppAccess): self
    {
        $this->allowUserRequestsForAppAccess = $allowUserRequestsForAppAccess;
        return $this;
    }

    public function getIsUserPersonalScopeResourceSpecificConsentEnabled(): ?string
    {
        return $this->isUserPersonalScopeResourceSpecificConsentEnabled;
    }

    public function setIsUserPersonalScopeResourceSpecificConsentEnabled(?string $isUserPersonalScopeResourceSpecificConsentEnabled): self
    {
        $this->isUserPersonalScopeResourceSpecificConsentEnabled = $isUserPersonalScopeResourceSpecificConsentEnabled;
        return $this;
    }

}
