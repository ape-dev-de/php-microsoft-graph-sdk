<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalUsersSelfServiceSignUpEventsFlow
 */
class ExternalUsersSelfServiceSignUpEventsFlow
{
    /**
     * The configuration for what to invoke when attributes are ready to be collected from the user.
     */
    private ?string $onAttributeCollection;

    /**
     * The configuration for what to invoke when attribution collection starts.
     */
    private ?string $onAttributeCollectionStart;

    /**
     * The configuration for what to invoke when attributes are submitted at the end of attribution collection.
     */
    private ?string $onAttributeCollectionSubmit;

    /**
     * Required. The configuration for what to invoke when authentication methods are ready to be presented to the user. Must have at least one identity provider linked.  Supports $filter (eq). See support for filtering on user flows for syntax information.
     */
    private ?string $onAuthenticationMethodLoadStart;

    /**
     * Required. The configuration for what to invoke when an authentication flow is ready to be initiated.
     */
    private ?string $onInteractiveAuthFlowStart;

    /**
     * The configuration for what to invoke during user creation.
     */
    private ?string $onUserCreateStart;


    public function getOnAttributeCollection(): ?string
    {
        return $this->onAttributeCollection;
    }

    public function setOnAttributeCollection(?string $onAttributeCollection): self
    {
        $this->onAttributeCollection = $onAttributeCollection;
        return $this;
    }

    public function getOnAttributeCollectionStart(): ?string
    {
        return $this->onAttributeCollectionStart;
    }

    public function setOnAttributeCollectionStart(?string $onAttributeCollectionStart): self
    {
        $this->onAttributeCollectionStart = $onAttributeCollectionStart;
        return $this;
    }

    public function getOnAttributeCollectionSubmit(): ?string
    {
        return $this->onAttributeCollectionSubmit;
    }

    public function setOnAttributeCollectionSubmit(?string $onAttributeCollectionSubmit): self
    {
        $this->onAttributeCollectionSubmit = $onAttributeCollectionSubmit;
        return $this;
    }

    public function getOnAuthenticationMethodLoadStart(): ?string
    {
        return $this->onAuthenticationMethodLoadStart;
    }

    public function setOnAuthenticationMethodLoadStart(?string $onAuthenticationMethodLoadStart): self
    {
        $this->onAuthenticationMethodLoadStart = $onAuthenticationMethodLoadStart;
        return $this;
    }

    public function getOnInteractiveAuthFlowStart(): ?string
    {
        return $this->onInteractiveAuthFlowStart;
    }

    public function setOnInteractiveAuthFlowStart(?string $onInteractiveAuthFlowStart): self
    {
        $this->onInteractiveAuthFlowStart = $onInteractiveAuthFlowStart;
        return $this;
    }

    public function getOnUserCreateStart(): ?string
    {
        return $this->onUserCreateStart;
    }

    public function setOnUserCreateStart(?string $onUserCreateStart): self
    {
        $this->onUserCreateStart = $onUserCreateStart;
        return $this;
    }

}
