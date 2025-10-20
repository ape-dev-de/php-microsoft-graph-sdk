<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcOnPremisesConnection
 */
class CloudPcOnPremisesConnection
{
    /**
     * The fully qualified domain name (FQDN) of the Active Directory domain you want to join. Maximum length is 255. Optional.
     */
    private ?string $adDomainName;

    /**
     * The password associated with the username of an Active Directory account (adDomainUsername).
     */
    private ?string $adDomainPassword;

    /**
     * The username of an Active Directory account (user or service account) that has permission to create computer objects in Active Directory. Required format: admin@contoso.com. Optional.
     */
    private ?string $adDomainUsername;

    /**
     * The interface URL of the partner service's resource that links to this Azure network connection. Returned only on $select.
     */
    private ?string $alternateResourceUrl;

    /**
     * Specifies how the provisioned Cloud PC joins to Microsoft Entra. It includes different types, one is Microsoft Entra ID join, which means there''s no on-premises Active Directory (AD) in the current tenant, and the Cloud PC device is joined by Microsoft Entra. Another one is hybridAzureADJoin, which means there''s also an on-premises Active Directory (AD) in the current tenant and the Cloud PC device joins to on-premises Active Directory (AD) and Microsoft Entra. The type also determines which types of users can be assigned and can sign into a Cloud PC. The azureADJoin type indicates that cloud-only and hybrid users can be assigned and signed into the Cloud PC. hybridAzureADJoin indicates only hybrid users can be assigned and signed into the Cloud PC. The default value is hybridAzureADJoin.
     */
    private ?string $connectionType;

    /**
     * The display name for the Azure network connection.
     */
    private ?string $displayName;

    /**
     */
    private ?string $healthCheckStatus;

    /**
     * Indicates the results of health checks performed on the on-premises connection. Read-only. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an Azure network connection, including healthCheckStatusDetail. Read-only.
     */
    private ?string $healthCheckStatusDetail;

    /**
     * When true, the Azure network connection is in use. When false, the connection isn''t in use. You can''t delete a connection that’s in use. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an Azure network connection, including healthCheckStatusDetail. Read-only.
     */
    private ?bool $inUse;

    /**
     * The organizational unit (OU) in which the computer account is created. If left null, the OU configured as the default (a well-known computer object container) in the tenant''s Active Directory domain (OU) is used. Optional.
     */
    private ?string $organizationalUnit;

    /**
     * The unique identifier of the target resource group used associated with the on-premises network connectivity for Cloud PCs. Required format: ''/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}
     */
    private ?string $resourceGroupId;

    /**
     * The unique identifier of the target subnet used associated with the on-premises network connectivity for Cloud PCs. Required format: ''/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkId}/subnets/{subnetName}
     */
    private ?string $subnetId;

    /**
     * The unique identifier of the Azure subscription associated with the tenant.
     */
    private ?string $subscriptionId;

    /**
     * The name of the Azure subscription is used to create an Azure network connection. Read-only.
     */
    private ?string $subscriptionName;

    /**
     * The unique identifier of the target virtual network used associated with the on-premises network connectivity for Cloud PCs. Required format: ''/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkName}
     */
    private ?string $virtualNetworkId;

    /**
     * Indicates the resource location of the target virtual network. For example, the location can be eastus2, westeurope, etc. Read-only (computed value).
     */
    private ?string $virtualNetworkLocation;

    public function getAdDomainName(): ?string
    {
        return $this->adDomainName;
    }

    public function setAdDomainName(?string $adDomainName): self
    {
        $this->adDomainName = $adDomainName;
        return $this;
    }

    public function getAdDomainPassword(): ?string
    {
        return $this->adDomainPassword;
    }

    public function setAdDomainPassword(?string $adDomainPassword): self
    {
        $this->adDomainPassword = $adDomainPassword;
        return $this;
    }

    public function getAdDomainUsername(): ?string
    {
        return $this->adDomainUsername;
    }

    public function setAdDomainUsername(?string $adDomainUsername): self
    {
        $this->adDomainUsername = $adDomainUsername;
        return $this;
    }

    public function getAlternateResourceUrl(): ?string
    {
        return $this->alternateResourceUrl;
    }

    public function setAlternateResourceUrl(?string $alternateResourceUrl): self
    {
        $this->alternateResourceUrl = $alternateResourceUrl;
        return $this;
    }

    public function getConnectionType(): ?string
    {
        return $this->connectionType;
    }

    public function setConnectionType(?string $connectionType): self
    {
        $this->connectionType = $connectionType;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getHealthCheckStatus(): ?string
    {
        return $this->healthCheckStatus;
    }

    public function setHealthCheckStatus(?string $healthCheckStatus): self
    {
        $this->healthCheckStatus = $healthCheckStatus;
        return $this;
    }

    public function getHealthCheckStatusDetail(): ?string
    {
        return $this->healthCheckStatusDetail;
    }

    public function setHealthCheckStatusDetail(?string $healthCheckStatusDetail): self
    {
        $this->healthCheckStatusDetail = $healthCheckStatusDetail;
        return $this;
    }

    public function getInUse(): ?bool
    {
        return $this->inUse;
    }

    public function setInUse(?bool $inUse): self
    {
        $this->inUse = $inUse;
        return $this;
    }

    public function getOrganizationalUnit(): ?string
    {
        return $this->organizationalUnit;
    }

    public function setOrganizationalUnit(?string $organizationalUnit): self
    {
        $this->organizationalUnit = $organizationalUnit;
        return $this;
    }

    public function getResourceGroupId(): ?string
    {
        return $this->resourceGroupId;
    }

    public function setResourceGroupId(?string $resourceGroupId): self
    {
        $this->resourceGroupId = $resourceGroupId;
        return $this;
    }

    public function getSubnetId(): ?string
    {
        return $this->subnetId;
    }

    public function setSubnetId(?string $subnetId): self
    {
        $this->subnetId = $subnetId;
        return $this;
    }

    public function getSubscriptionId(): ?string
    {
        return $this->subscriptionId;
    }

    public function setSubscriptionId(?string $subscriptionId): self
    {
        $this->subscriptionId = $subscriptionId;
        return $this;
    }

    public function getSubscriptionName(): ?string
    {
        return $this->subscriptionName;
    }

    public function setSubscriptionName(?string $subscriptionName): self
    {
        $this->subscriptionName = $subscriptionName;
        return $this;
    }

    public function getVirtualNetworkId(): ?string
    {
        return $this->virtualNetworkId;
    }

    public function setVirtualNetworkId(?string $virtualNetworkId): self
    {
        $this->virtualNetworkId = $virtualNetworkId;
        return $this;
    }

    public function getVirtualNetworkLocation(): ?string
    {
        return $this->virtualNetworkLocation;
    }

    public function setVirtualNetworkLocation(?string $virtualNetworkLocation): self
    {
        $this->virtualNetworkLocation = $virtualNetworkLocation;
        return $this;
    }

}
