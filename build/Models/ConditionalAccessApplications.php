<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessApplications
 */
class ConditionalAccessApplications
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Filter that defines the dynamic-application-syntax rule to include/exclude cloud applications. A filter can use custom security attributes to include/exclude applications.
     * @var ConditionalAccessFilter|\stdClass|null
     */
    public ConditionalAccessFilter|\stdClass|null $applicationFilter = null;

    /** 
     * Can be one of the following:  The list of client IDs (appId) explicitly excluded from the policy. Office365 - For the list of apps included in Office365, see Apps included in Conditional Access Office 365 app suite  MicrosoftAdminPortals - For more information, see Conditional Access Target resources: Microsoft Admin Portals
     * @var string[]
     */
    public array $excludeApplications = [];

    /** 
     * Can be one of the following:  The list of client IDs (appId) the policy applies to, unless explicitly excluded (in excludeApplications)  All  Office365 - For the list of apps included in Office365, see Apps included in Conditional Access Office 365 app suite  MicrosoftAdminPortals - For more information, see Conditional Access Target resources: Microsoft Admin Portals
     * @var string[]
     */
    public array $includeApplications = [];

    /** 
     * 
     * @var string[]
     */
    public array $includeAuthenticationContextClassReferences = [];

    /** 
     * User actions to include. Supported values are urn:user:registersecurityinfo and urn:user:registerdevice
     * @var string[]
     */
    public array $includeUserActions = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['applicationFilter'])) {
            $this->applicationFilter = is_array($data['applicationFilter']) ? new ConditionalAccessFilter($data['applicationFilter']) : $data['applicationFilter'];
        }
        if (isset($data['excludeApplications'])) {
            $this->excludeApplications = $data['excludeApplications'];
        }
        if (isset($data['includeApplications'])) {
            $this->includeApplications = $data['includeApplications'];
        }
        if (isset($data['includeAuthenticationContextClassReferences'])) {
            $this->includeAuthenticationContextClassReferences = $data['includeAuthenticationContextClassReferences'];
        }
        if (isset($data['includeUserActions'])) {
            $this->includeUserActions = $data['includeUserActions'];
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
