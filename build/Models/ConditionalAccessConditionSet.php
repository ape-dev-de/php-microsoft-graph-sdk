<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessConditionSet
 */
class ConditionalAccessConditionSet
{
    /**
     * Applications and user actions included in and excluded from the policy. Required.
     */
    private ?string $applications;

    /**
     * Authentication flows included in the policy scope.
     */
    private ?string $authenticationFlows;

    /**
     * Client applications (service principals and workload identities) included in and excluded from the policy. Either users or clientApplications is required.
     */
    private ?string $clientApplications;

    /**
     * Client application types included in the policy. Possible values are: all, browser, mobileAppsAndDesktopClients, exchangeActiveSync, easSupported, other. Required.  The easUnsupported enumeration member will be deprecated in favor of exchangeActiveSync, which includes EAS supported and unsupported platforms.
     */
    private array $clientAppTypes = [];

    /**
     * Devices in the policy.
     */
    private ?string $devices;

    /**
     * Insider risk levels included in the policy. The possible values are: minor, moderate, elevated, unknownFutureValue.
     */
    private ?string $insiderRiskLevels;

    /**
     * Locations included in and excluded from the policy.
     */
    private ?string $locations;

    /**
     * Platforms included in and excluded from the policy.
     */
    private ?string $platforms;

    /**
     * Service principal risk levels included in the policy. Possible values are: low, medium, high, none, unknownFutureValue.
     */
    private array $servicePrincipalRiskLevels = [];

    /**
     * Sign-in risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
     */
    private array $signInRiskLevels = [];

    /**
     * User risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
     */
    private array $userRiskLevels = [];

    /**
     * Users, groups, and roles included in and excluded from the policy. Either users or clientApplications is required.
     */
    private ?string $users;


    public function getApplications(): ?string
    {
        return $this->applications;
    }

    public function setApplications(?string $applications): self
    {
        $this->applications = $applications;
        return $this;
    }

    public function getAuthenticationFlows(): ?string
    {
        return $this->authenticationFlows;
    }

    public function setAuthenticationFlows(?string $authenticationFlows): self
    {
        $this->authenticationFlows = $authenticationFlows;
        return $this;
    }

    public function getClientApplications(): ?string
    {
        return $this->clientApplications;
    }

    public function setClientApplications(?string $clientApplications): self
    {
        $this->clientApplications = $clientApplications;
        return $this;
    }

    public function getClientAppTypes(): array
    {
        return $this->clientAppTypes;
    }

    public function setClientAppTypes(array $clientAppTypes): self
    {
        $this->clientAppTypes = $clientAppTypes;
        return $this;
    }

    public function getDevices(): ?string
    {
        return $this->devices;
    }

    public function setDevices(?string $devices): self
    {
        $this->devices = $devices;
        return $this;
    }

    public function getInsiderRiskLevels(): ?string
    {
        return $this->insiderRiskLevels;
    }

    public function setInsiderRiskLevels(?string $insiderRiskLevels): self
    {
        $this->insiderRiskLevels = $insiderRiskLevels;
        return $this;
    }

    public function getLocations(): ?string
    {
        return $this->locations;
    }

    public function setLocations(?string $locations): self
    {
        $this->locations = $locations;
        return $this;
    }

    public function getPlatforms(): ?string
    {
        return $this->platforms;
    }

    public function setPlatforms(?string $platforms): self
    {
        $this->platforms = $platforms;
        return $this;
    }

    public function getServicePrincipalRiskLevels(): array
    {
        return $this->servicePrincipalRiskLevels;
    }

    public function setServicePrincipalRiskLevels(array $servicePrincipalRiskLevels): self
    {
        $this->servicePrincipalRiskLevels = $servicePrincipalRiskLevels;
        return $this;
    }

    public function getSignInRiskLevels(): array
    {
        return $this->signInRiskLevels;
    }

    public function setSignInRiskLevels(array $signInRiskLevels): self
    {
        $this->signInRiskLevels = $signInRiskLevels;
        return $this;
    }

    public function getUserRiskLevels(): array
    {
        return $this->userRiskLevels;
    }

    public function setUserRiskLevels(array $userRiskLevels): self
    {
        $this->userRiskLevels = $userRiskLevels;
        return $this;
    }

    public function getUsers(): ?string
    {
        return $this->users;
    }

    public function setUsers(?string $users): self
    {
        $this->users = $users;
        return $this;
    }

}
