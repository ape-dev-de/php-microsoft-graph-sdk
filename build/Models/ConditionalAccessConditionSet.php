<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessConditionSet
 */
class ConditionalAccessConditionSet
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Applications and user actions included in and excluded from the policy. Required.
     * @var ConditionalAccessApplications|\stdClass|null
     */
    public ConditionalAccessApplications|\stdClass|null $applications = null;

    /** 
     * Authentication flows included in the policy scope.
     * @var ConditionalAccessAuthenticationFlows|\stdClass|null
     */
    public ConditionalAccessAuthenticationFlows|\stdClass|null $authenticationFlows = null;

    /** 
     * Client applications (service principals and workload identities) included in and excluded from the policy. Either users or clientApplications is required.
     * @var ConditionalAccessClientApplications|\stdClass|null
     */
    public ConditionalAccessClientApplications|\stdClass|null $clientApplications = null;

    /** 
     * Client application types included in the policy. Possible values are: all, browser, mobileAppsAndDesktopClients, exchangeActiveSync, easSupported, other. Required.  The easUnsupported enumeration member will be deprecated in favor of exchangeActiveSync, which includes EAS supported and unsupported platforms.
     * @var ConditionalAccessClientApp[]
     */
    public array $clientAppTypes = [];

    /** 
     * Devices in the policy.
     * @var ConditionalAccessDevices|\stdClass|null
     */
    public ConditionalAccessDevices|\stdClass|null $devices = null;

    /** 
     * Insider risk levels included in the policy. The possible values are: minor, moderate, elevated, unknownFutureValue.
     * @var ConditionalAccessInsiderRiskLevels|\stdClass|null
     */
    public ConditionalAccessInsiderRiskLevels|\stdClass|null $insiderRiskLevels = null;

    /** 
     * Locations included in and excluded from the policy.
     * @var ConditionalAccessLocations|\stdClass|null
     */
    public ConditionalAccessLocations|\stdClass|null $locations = null;

    /** 
     * Platforms included in and excluded from the policy.
     * @var ConditionalAccessPlatforms|\stdClass|null
     */
    public ConditionalAccessPlatforms|\stdClass|null $platforms = null;

    /** 
     * Service principal risk levels included in the policy. Possible values are: low, medium, high, none, unknownFutureValue.
     * @var RiskLevel[]
     */
    public array $servicePrincipalRiskLevels = [];

    /** 
     * Sign-in risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
     * @var RiskLevel[]
     */
    public array $signInRiskLevels = [];

    /** 
     * User risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
     * @var RiskLevel[]
     */
    public array $userRiskLevels = [];

    /** 
     * Users, groups, and roles included in and excluded from the policy. Either users or clientApplications is required.
     * @var ConditionalAccessUsers|\stdClass|null
     */
    public ConditionalAccessUsers|\stdClass|null $users = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['applications'])) {
            $this->applications = is_array($data['applications']) ? new ConditionalAccessApplications($data['applications']) : $data['applications'];
        }
        if (isset($data['authenticationFlows'])) {
            $this->authenticationFlows = is_array($data['authenticationFlows']) ? new ConditionalAccessAuthenticationFlows($data['authenticationFlows']) : $data['authenticationFlows'];
        }
        if (isset($data['clientApplications'])) {
            $this->clientApplications = is_array($data['clientApplications']) ? new ConditionalAccessClientApplications($data['clientApplications']) : $data['clientApplications'];
        }
        if (isset($data['clientAppTypes'])) {
            $this->clientAppTypes = $data['clientAppTypes'];
        }
        if (isset($data['devices'])) {
            $this->devices = is_array($data['devices']) ? new ConditionalAccessDevices($data['devices']) : $data['devices'];
        }
        if (isset($data['insiderRiskLevels'])) {
            $this->insiderRiskLevels = is_string($data['insiderRiskLevels']) ? ConditionalAccessInsiderRiskLevels::tryFrom($data['insiderRiskLevels']) : $data['insiderRiskLevels'];
        }
        if (isset($data['locations'])) {
            $this->locations = is_array($data['locations']) ? new ConditionalAccessLocations($data['locations']) : $data['locations'];
        }
        if (isset($data['platforms'])) {
            $this->platforms = is_array($data['platforms']) ? new ConditionalAccessPlatforms($data['platforms']) : $data['platforms'];
        }
        if (isset($data['servicePrincipalRiskLevels'])) {
            $this->servicePrincipalRiskLevels = $data['servicePrincipalRiskLevels'];
        }
        if (isset($data['signInRiskLevels'])) {
            $this->signInRiskLevels = $data['signInRiskLevels'];
        }
        if (isset($data['userRiskLevels'])) {
            $this->userRiskLevels = $data['userRiskLevels'];
        }
        if (isset($data['users'])) {
            $this->users = is_array($data['users']) ? new ConditionalAccessUsers($data['users']) : $data['users'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
