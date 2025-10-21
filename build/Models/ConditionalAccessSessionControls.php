<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessSessionControls
 */
class ConditionalAccessSessionControls
{
    /**
     * Session control to enforce application restrictions. Only Exchange Online and Sharepoint Online support this session control.
     */
    private ?string $applicationEnforcedRestrictions;

    /**
     * Session control to apply cloud app security.
     */
    private ?string $cloudAppSecurity;

    /**
     * Session control that determines whether it is acceptable for Microsoft Entra ID to extend existing sessions based on information collected prior to an outage or not.
     */
    private ?bool $disableResilienceDefaults;

    /**
     * Session control to define whether to persist cookies or not. All apps should be selected for this session control to work correctly.
     */
    private ?string $persistentBrowser;

    /**
     */
    private ?string $secureSignInSession;

    /**
     * Session control to enforce signin frequency.
     */
    private ?string $signInFrequency;


    public function getApplicationEnforcedRestrictions(): ?string
    {
        return $this->applicationEnforcedRestrictions;
    }

    public function setApplicationEnforcedRestrictions(?string $applicationEnforcedRestrictions): self
    {
        $this->applicationEnforcedRestrictions = $applicationEnforcedRestrictions;
        return $this;
    }

    public function getCloudAppSecurity(): ?string
    {
        return $this->cloudAppSecurity;
    }

    public function setCloudAppSecurity(?string $cloudAppSecurity): self
    {
        $this->cloudAppSecurity = $cloudAppSecurity;
        return $this;
    }

    public function getDisableResilienceDefaults(): ?bool
    {
        return $this->disableResilienceDefaults;
    }

    public function setDisableResilienceDefaults(?bool $disableResilienceDefaults): self
    {
        $this->disableResilienceDefaults = $disableResilienceDefaults;
        return $this;
    }

    public function getPersistentBrowser(): ?string
    {
        return $this->persistentBrowser;
    }

    public function setPersistentBrowser(?string $persistentBrowser): self
    {
        $this->persistentBrowser = $persistentBrowser;
        return $this;
    }

    public function getSecureSignInSession(): ?string
    {
        return $this->secureSignInSession;
    }

    public function setSecureSignInSession(?string $secureSignInSession): self
    {
        $this->secureSignInSession = $secureSignInSession;
        return $this;
    }

    public function getSignInFrequency(): ?string
    {
        return $this->signInFrequency;
    }

    public function setSignInFrequency(?string $signInFrequency): self
    {
        $this->signInFrequency = $signInFrequency;
        return $this;
    }

}
