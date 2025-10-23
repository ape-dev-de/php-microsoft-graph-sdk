<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcOnPremisesConnection
 */
class CloudPcOnPremisesConnection
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The fully qualified domain name (FQDN) of the Active Directory domain you want to join. Maximum length is 255. Optional. */
    public ?string $adDomainName = null;

    /** The password associated with the username of an Active Directory account (adDomainUsername). */
    public ?string $adDomainPassword = null;

    /** The username of an Active Directory account (user or service account) that has permission to create computer objects in Active Directory. Required format: admin@contoso.com. Optional. */
    public ?string $adDomainUsername = null;

    /** The interface URL of the partner service's resource that links to this Azure network connection. Returned only on $select. */
    public ?string $alternateResourceUrl = null;

    /** 
     * Specifies how the provisioned Cloud PC joins to Microsoft Entra. It includes different types, one is Microsoft Entra ID join, which means there's no on-premises Active Directory (AD) in the current tenant, and the Cloud PC device is joined by Microsoft Entra. Another one is hybridAzureADJoin, which means there's also an on-premises Active Directory (AD) in the current tenant and the Cloud PC device joins to on-premises Active Directory (AD) and Microsoft Entra. The type also determines which types of users can be assigned and can sign into a Cloud PC. The azureADJoin type indicates that cloud-only and hybrid users can be assigned and signed into the Cloud PC. hybridAzureADJoin indicates only hybrid users can be assigned and signed into the Cloud PC. The default value is hybridAzureADJoin.
     * @var CloudPcOnPremisesConnectionType|\stdClass|null
     */
    public mixed $connectionType = null;

    /** The display name for the Azure network connection. */
    public ?string $displayName = null;

    /**  */
    public ?CloudPcOnPremisesConnectionStatus $healthCheckStatus = null;

    /** 
     * Indicates the results of health checks performed on the on-premises connection. Read-only. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an Azure network connection, including healthCheckStatusDetail. Read-only.
     * @var CloudPcOnPremisesConnectionStatusDetail|\stdClass|null
     */
    public mixed $healthCheckStatusDetail = null;

    /** When true, the Azure network connection is in use. When false, the connection isn't in use. You can't delete a connection that’s in use. Returned only on $select. For an example that shows how to get the inUse property, see Example 2: Get the selected properties of an Azure network connection, including healthCheckStatusDetail. Read-only. */
    public ?bool $inUse = null;

    /** The organizational unit (OU) in which the computer account is created. If left null, the OU configured as the default (a well-known computer object container) in the tenant's Active Directory domain (OU) is used. Optional. */
    public ?string $organizationalUnit = null;

    /** The unique identifier of the target resource group used associated with the on-premises network connectivity for Cloud PCs. Required format: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}' */
    public ?string $resourceGroupId = null;

    /** The unique identifier of the target subnet used associated with the on-premises network connectivity for Cloud PCs. Required format: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkId}/subnets/{subnetName}' */
    public ?string $subnetId = null;

    /** The unique identifier of the Azure subscription associated with the tenant. */
    public ?string $subscriptionId = null;

    /** The name of the Azure subscription is used to create an Azure network connection. Read-only. */
    public ?string $subscriptionName = null;

    /** The unique identifier of the target virtual network used associated with the on-premises network connectivity for Cloud PCs. Required format: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Network/virtualNetworks/{virtualNetworkName}' */
    public ?string $virtualNetworkId = null;

    /** Indicates the resource location of the target virtual network. For example, the location can be eastus2, westeurope, etc. Read-only (computed value). */
    public ?string $virtualNetworkLocation = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['adDomainName'])) {
            $this->adDomainName = $data['adDomainName'];
        }
        if (isset($data['adDomainPassword'])) {
            $this->adDomainPassword = $data['adDomainPassword'];
        }
        if (isset($data['adDomainUsername'])) {
            $this->adDomainUsername = $data['adDomainUsername'];
        }
        if (isset($data['alternateResourceUrl'])) {
            $this->alternateResourceUrl = $data['alternateResourceUrl'];
        }
        if (isset($data['connectionType'])) {
            $this->connectionType = is_array($data['connectionType']) ? new CloudPcOnPremisesConnectionType($data['connectionType']) : $data['connectionType'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['healthCheckStatus'])) {
            $this->healthCheckStatus = is_array($data['healthCheckStatus']) ? new CloudPcOnPremisesConnectionStatus($data['healthCheckStatus']) : $data['healthCheckStatus'];
        }
        if (isset($data['healthCheckStatusDetail'])) {
            $this->healthCheckStatusDetail = is_array($data['healthCheckStatusDetail']) ? new CloudPcOnPremisesConnectionStatusDetail($data['healthCheckStatusDetail']) : $data['healthCheckStatusDetail'];
        }
        if (isset($data['inUse'])) {
            $this->inUse = $data['inUse'];
        }
        if (isset($data['organizationalUnit'])) {
            $this->organizationalUnit = $data['organizationalUnit'];
        }
        if (isset($data['resourceGroupId'])) {
            $this->resourceGroupId = $data['resourceGroupId'];
        }
        if (isset($data['subnetId'])) {
            $this->subnetId = $data['subnetId'];
        }
        if (isset($data['subscriptionId'])) {
            $this->subscriptionId = $data['subscriptionId'];
        }
        if (isset($data['subscriptionName'])) {
            $this->subscriptionName = $data['subscriptionName'];
        }
        if (isset($data['virtualNetworkId'])) {
            $this->virtualNetworkId = $data['virtualNetworkId'];
        }
        if (isset($data['virtualNetworkLocation'])) {
            $this->virtualNetworkLocation = $data['virtualNetworkLocation'];
        }
    }
}
