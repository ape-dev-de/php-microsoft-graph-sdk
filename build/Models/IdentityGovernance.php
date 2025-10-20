<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernance
 */
class IdentityGovernance
{
    /**
     */
    private ?string $accessReviews;

    /**
     */
    private ?string $appConsent;

    /**
     */
    private ?string $entitlementManagement;

    /**
     */
    private ?string $lifecycleWorkflows;

    /**
     */
    private ?string $privilegedAccess;

    /**
     */
    private ?string $termsOfUse;

    public function getAccessReviews(): ?string
    {
        return $this->accessReviews;
    }

    public function setAccessReviews(?string $accessReviews): self
    {
        $this->accessReviews = $accessReviews;
        return $this;
    }

    public function getAppConsent(): ?string
    {
        return $this->appConsent;
    }

    public function setAppConsent(?string $appConsent): self
    {
        $this->appConsent = $appConsent;
        return $this;
    }

    public function getEntitlementManagement(): ?string
    {
        return $this->entitlementManagement;
    }

    public function setEntitlementManagement(?string $entitlementManagement): self
    {
        $this->entitlementManagement = $entitlementManagement;
        return $this;
    }

    public function getLifecycleWorkflows(): ?string
    {
        return $this->lifecycleWorkflows;
    }

    public function setLifecycleWorkflows(?string $lifecycleWorkflows): self
    {
        $this->lifecycleWorkflows = $lifecycleWorkflows;
        return $this;
    }

    public function getPrivilegedAccess(): ?string
    {
        return $this->privilegedAccess;
    }

    public function setPrivilegedAccess(?string $privilegedAccess): self
    {
        $this->privilegedAccess = $privilegedAccess;
        return $this;
    }

    public function getTermsOfUse(): ?string
    {
        return $this->termsOfUse;
    }

    public function setTermsOfUse(?string $termsOfUse): self
    {
        $this->termsOfUse = $termsOfUse;
        return $this;
    }

}
