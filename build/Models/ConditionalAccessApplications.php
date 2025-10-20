<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessApplications
 */
class ConditionalAccessApplications
{
    /**
     * Filter that defines the dynamic-application-syntax rule to include/exclude cloud applications. A filter can use custom security attributes to include/exclude applications.
     */
    private ?string $applicationFilter;

    /**
     * Can be one of the following:  The list of client IDs (appId) explicitly excluded from the policy. Office365 - For the list of apps included in Office365, see Apps included in Conditional Access Office 365 app suite  MicrosoftAdminPortals - For more information, see Conditional Access Target resources: Microsoft Admin Portals
     */
    private ?string $excludeApplications;

    /**
     * Can be one of the following:  The list of client IDs (appId) the policy applies to, unless explicitly excluded (in excludeApplications)  All  Office365 - For the list of apps included in Office365, see Apps included in Conditional Access Office 365 app suite  MicrosoftAdminPortals - For more information, see Conditional Access Target resources: Microsoft Admin Portals
     */
    private ?string $includeApplications;

    /**
     */
    private ?string $includeAuthenticationContextClassReferences;

    /**
     * User actions to include. Supported values are urn:user:registersecurityinfo and urn:user:registerdevice
     */
    private ?string $includeUserActions;

    public function getApplicationFilter(): ?string
    {
        return $this->applicationFilter;
    }

    public function setApplicationFilter(?string $applicationFilter): self
    {
        $this->applicationFilter = $applicationFilter;
        return $this;
    }

    public function getExcludeApplications(): ?string
    {
        return $this->excludeApplications;
    }

    public function setExcludeApplications(?string $excludeApplications): self
    {
        $this->excludeApplications = $excludeApplications;
        return $this;
    }

    public function getIncludeApplications(): ?string
    {
        return $this->includeApplications;
    }

    public function setIncludeApplications(?string $includeApplications): self
    {
        $this->includeApplications = $includeApplications;
        return $this;
    }

    public function getIncludeAuthenticationContextClassReferences(): ?string
    {
        return $this->includeAuthenticationContextClassReferences;
    }

    public function setIncludeAuthenticationContextClassReferences(?string $includeAuthenticationContextClassReferences): self
    {
        $this->includeAuthenticationContextClassReferences = $includeAuthenticationContextClassReferences;
        return $this;
    }

    public function getIncludeUserActions(): ?string
    {
        return $this->includeUserActions;
    }

    public function setIncludeUserActions(?string $includeUserActions): self
    {
        $this->includeUserActions = $includeUserActions;
        return $this;
    }

}
