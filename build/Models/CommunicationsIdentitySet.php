<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommunicationsIdentitySet
 */
class CommunicationsIdentitySet
{
    /**
     * The application instance associated with this action.
     */
    private ?string $applicationInstance;

    /**
     * An identity the participant would like to present itself as to the other participants in the call.
     */
    private ?string $assertedIdentity;

    /**
     * The Azure Communication Services user associated with this action.
     */
    private ?string $azureCommunicationServicesUser;

    /**
     * The encrypted user associated with this action.
     */
    private ?string $encrypted;

    /**
     * Type of endpoint that the participant uses. Possible values are: default, voicemail, skypeForBusiness, skypeForBusinessVoipPhone, unknownFutureValue.
     */
    private ?string $endpointType;

    /**
     * The guest user associated with this action.
     */
    private ?string $guest;

    /**
     * The Skype for Business on-premises user associated with this action.
     */
    private ?string $onPremises;

    /**
     * The phone user associated with this action.
     */
    private ?string $phone;


    public function getApplicationInstance(): ?string
    {
        return $this->applicationInstance;
    }

    public function setApplicationInstance(?string $applicationInstance): self
    {
        $this->applicationInstance = $applicationInstance;
        return $this;
    }

    public function getAssertedIdentity(): ?string
    {
        return $this->assertedIdentity;
    }

    public function setAssertedIdentity(?string $assertedIdentity): self
    {
        $this->assertedIdentity = $assertedIdentity;
        return $this;
    }

    public function getAzureCommunicationServicesUser(): ?string
    {
        return $this->azureCommunicationServicesUser;
    }

    public function setAzureCommunicationServicesUser(?string $azureCommunicationServicesUser): self
    {
        $this->azureCommunicationServicesUser = $azureCommunicationServicesUser;
        return $this;
    }

    public function getEncrypted(): ?string
    {
        return $this->encrypted;
    }

    public function setEncrypted(?string $encrypted): self
    {
        $this->encrypted = $encrypted;
        return $this;
    }

    public function getEndpointType(): ?string
    {
        return $this->endpointType;
    }

    public function setEndpointType(?string $endpointType): self
    {
        $this->endpointType = $endpointType;
        return $this;
    }

    public function getGuest(): ?string
    {
        return $this->guest;
    }

    public function setGuest(?string $guest): self
    {
        $this->guest = $guest;
        return $this;
    }

    public function getOnPremises(): ?string
    {
        return $this->onPremises;
    }

    public function setOnPremises(?string $onPremises): self
    {
        $this->onPremises = $onPremises;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

}
