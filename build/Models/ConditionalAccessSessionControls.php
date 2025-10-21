<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessSessionControls
 */
class ConditionalAccessSessionControls
{
    public function __construct(
        /** Session control to enforce application restrictions. Only Exchange Online and Sharepoint Online support this session control. */
        public ?ApplicationEnforcedRestrictionsSessionControl $applicationEnforcedRestrictions = null,
        /** Session control to apply cloud app security. */
        public ?CloudAppSecuritySessionControl $cloudAppSecurity = null,
        /** Session control that determines whether it is acceptable for Microsoft Entra ID to extend existing sessions based on information collected prior to an outage or not. */
        public ?bool $disableResilienceDefaults = null,
        /** Session control to define whether to persist cookies or not. All apps should be selected for this session control to work correctly. */
        public ?PersistentBrowserSessionControl $persistentBrowser = null,
        /**  */
        public ?SecureSignInSessionControl $secureSignInSession = null,
        /** Session control to enforce signin frequency. */
        public ?SignInFrequencySessionControl $signInFrequency = null
    ) {}
}
