<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessSessionControls
 */
class ConditionalAccessSessionControls
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Session control to enforce application restrictions. Only Exchange Online and Sharepoint Online support this session control.
     * @var ApplicationEnforcedRestrictionsSessionControl|\stdClass|null
     */
    public mixed $applicationEnforcedRestrictions = null;

    /** 
     * Session control to apply cloud app security.
     * @var CloudAppSecuritySessionControl|\stdClass|null
     */
    public mixed $cloudAppSecurity = null;

    /** Session control that determines whether it is acceptable for Microsoft Entra ID to extend existing sessions based on information collected prior to an outage or not. */
    public ?bool $disableResilienceDefaults = null;

    /** 
     * Session control to define whether to persist cookies or not. All apps should be selected for this session control to work correctly.
     * @var PersistentBrowserSessionControl|\stdClass|null
     */
    public mixed $persistentBrowser = null;

    /** 
     * 
     * @var SecureSignInSessionControl|\stdClass|null
     */
    public mixed $secureSignInSession = null;

    /** 
     * Session control to enforce signin frequency.
     * @var SignInFrequencySessionControl|\stdClass|null
     */
    public mixed $signInFrequency = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['applicationEnforcedRestrictions'])) {
            $this->applicationEnforcedRestrictions = is_array($data['applicationEnforcedRestrictions']) ? new ApplicationEnforcedRestrictionsSessionControl($data['applicationEnforcedRestrictions']) : $data['applicationEnforcedRestrictions'];
        }
        if (isset($data['cloudAppSecurity'])) {
            $this->cloudAppSecurity = is_array($data['cloudAppSecurity']) ? new CloudAppSecuritySessionControl($data['cloudAppSecurity']) : $data['cloudAppSecurity'];
        }
        if (isset($data['disableResilienceDefaults'])) {
            $this->disableResilienceDefaults = $data['disableResilienceDefaults'];
        }
        if (isset($data['persistentBrowser'])) {
            $this->persistentBrowser = is_array($data['persistentBrowser']) ? new PersistentBrowserSessionControl($data['persistentBrowser']) : $data['persistentBrowser'];
        }
        if (isset($data['secureSignInSession'])) {
            $this->secureSignInSession = is_array($data['secureSignInSession']) ? new SecureSignInSessionControl($data['secureSignInSession']) : $data['secureSignInSession'];
        }
        if (isset($data['signInFrequency'])) {
            $this->signInFrequency = is_array($data['signInFrequency']) ? new SignInFrequencySessionControl($data['signInFrequency']) : $data['signInFrequency'];
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
