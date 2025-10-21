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
     * @var string[]
     */
    private array $excludeApplications = [];

    /**
     * Can be one of the following:  The list of client IDs (appId) the policy applies to, unless explicitly excluded (in excludeApplications)  All  Office365 - For the list of apps included in Office365, see Apps included in Conditional Access Office 365 app suite  MicrosoftAdminPortals - For more information, see Conditional Access Target resources: Microsoft Admin Portals
     * @var string[]
     */
    private array $includeApplications = [];

    /**
     * @var string[]
     */
    private array $includeAuthenticationContextClassReferences = [];

    /**
     * User actions to include. Supported values are urn:user:registersecurityinfo and urn:user:registerdevice
     * @var string[]
     */
    private array $includeUserActions = [];


    public function getApplicationFilter(): ?string
    {
        return $this->applicationFilter;
    }

    public function setApplicationFilter(?string $applicationFilter): self
    {
        $this->applicationFilter = $applicationFilter;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getExcludeApplications(): array
    {
        return $this->excludeApplications;
    }

    /**
     * @param string[] $excludeApplications
     */
    public function setExcludeApplications(array $excludeApplications): self
    {
        $this->excludeApplications = $excludeApplications;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getIncludeApplications(): array
    {
        return $this->includeApplications;
    }

    /**
     * @param string[] $includeApplications
     */
    public function setIncludeApplications(array $includeApplications): self
    {
        $this->includeApplications = $includeApplications;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getIncludeAuthenticationContextClassReferences(): array
    {
        return $this->includeAuthenticationContextClassReferences;
    }

    /**
     * @param string[] $includeAuthenticationContextClassReferences
     */
    public function setIncludeAuthenticationContextClassReferences(array $includeAuthenticationContextClassReferences): self
    {
        $this->includeAuthenticationContextClassReferences = $includeAuthenticationContextClassReferences;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getIncludeUserActions(): array
    {
        return $this->includeUserActions;
    }

    /**
     * @param string[] $includeUserActions
     */
    public function setIncludeUserActions(array $includeUserActions): self
    {
        $this->includeUserActions = $includeUserActions;
        return $this;
    }

}
