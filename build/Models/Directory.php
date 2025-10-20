<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Directory
 */
class Directory
{
    /**
     * Conceptual container for user and group directory objects.
     */
    private array $administrativeUnits = [];

    /**
     * Group of related custom security attribute definitions.
     */
    private array $attributeSets = [];

    /**
     * Schema of a custom security attributes (key-value pairs).
     */
    private array $customSecurityAttributeDefinitions = [];

    /**
     * Recently deleted items. Read-only. Nullable.
     */
    private array $deletedItems = [];

    /**
     * The credentials of the device's local administrator account backed up to Microsoft Entra ID.
     */
    private array $deviceLocalCredentials = [];

    /**
     * Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
     */
    private array $federationConfigurations = [];

    /**
     * A container for on-premises directory synchronization functionalities that are available for the organization.
     */
    private array $onPremisesSynchronization = [];

    /**
     * The collection of public key infrastructure instances for the certificate-based authentication feature for users in a Microsoft Entra tenant.
     */
    private ?string $publicKeyInfrastructure;

    /**
     * List of commercial subscriptions that an organization acquired.
     */
    private ?string $subscriptions;

    public function getAdministrativeUnits(): array
    {
        return $this->administrativeUnits;
    }

    public function setAdministrativeUnits(array $administrativeUnits): self
    {
        $this->administrativeUnits = $administrativeUnits;
        return $this;
    }

    public function getAttributeSets(): array
    {
        return $this->attributeSets;
    }

    public function setAttributeSets(array $attributeSets): self
    {
        $this->attributeSets = $attributeSets;
        return $this;
    }

    public function getCustomSecurityAttributeDefinitions(): array
    {
        return $this->customSecurityAttributeDefinitions;
    }

    public function setCustomSecurityAttributeDefinitions(array $customSecurityAttributeDefinitions): self
    {
        $this->customSecurityAttributeDefinitions = $customSecurityAttributeDefinitions;
        return $this;
    }

    public function getDeletedItems(): array
    {
        return $this->deletedItems;
    }

    public function setDeletedItems(array $deletedItems): self
    {
        $this->deletedItems = $deletedItems;
        return $this;
    }

    public function getDeviceLocalCredentials(): array
    {
        return $this->deviceLocalCredentials;
    }

    public function setDeviceLocalCredentials(array $deviceLocalCredentials): self
    {
        $this->deviceLocalCredentials = $deviceLocalCredentials;
        return $this;
    }

    public function getFederationConfigurations(): array
    {
        return $this->federationConfigurations;
    }

    public function setFederationConfigurations(array $federationConfigurations): self
    {
        $this->federationConfigurations = $federationConfigurations;
        return $this;
    }

    public function getOnPremisesSynchronization(): array
    {
        return $this->onPremisesSynchronization;
    }

    public function setOnPremisesSynchronization(array $onPremisesSynchronization): self
    {
        $this->onPremisesSynchronization = $onPremisesSynchronization;
        return $this;
    }

    public function getPublicKeyInfrastructure(): ?string
    {
        return $this->publicKeyInfrastructure;
    }

    public function setPublicKeyInfrastructure(?string $publicKeyInfrastructure): self
    {
        $this->publicKeyInfrastructure = $publicKeyInfrastructure;
        return $this;
    }

    public function getSubscriptions(): ?string
    {
        return $this->subscriptions;
    }

    public function setSubscriptions(?string $subscriptions): self
    {
        $this->subscriptions = $subscriptions;
        return $this;
    }

}
