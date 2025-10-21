<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPC
 */
class CloudPC
{
    /**
     * The Microsoft Entra device ID for the Cloud PC, also known as the Azure Active Directory (Azure AD) device ID, that consists of 32 characters in a GUID format. Generated on a VM joined to Microsoft Entra ID. Read-only.
     */
    private ?string $aadDeviceId;

    /**
     * The display name for the Cloud PC. Maximum length is 64 characters. Read-only. You can use the cloudPC: rename API to modify the Cloud PC name.
     */
    private ?string $displayName;

    /**
     * The date and time when the grace period ends and reprovisioning or deprovisioning happen. Required only if the status is inGracePeriod. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $gracePeriodEndDateTime;

    /**
     * The name of the operating system image used for the Cloud PC. Maximum length is 50 characters. Only letters (A-Z, a-z), numbers (0-9), and special characters (-,,.) are allowed for this property. The property value can''t begin or end with an underscore. Read-only.
     */
    private ?string $imageDisplayName;

    /**
     * The last modified date and time of the Cloud PC. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The Intune enrolled device ID for the Cloud PC that consists of 32 characters in a GUID format. The managedDeviceId property of Windows 365 Business Cloud PCs is always null as Windows 365 Business Cloud PCs aren't Intune-enrolled automatically by Windows 365. Read-only.
     */
    private ?string $managedDeviceId;

    /**
     * The Intune enrolled device name for the Cloud PC. The managedDeviceName property of Windows 365 Business Cloud PCs is always null as Windows 365 Business Cloud PCs aren't Intune-enrolled automatically by Windows 365. Read-only.
     */
    private ?string $managedDeviceName;

    /**
     * The on-premises connection that applied during the provisioning of Cloud PCs. Read-only.
     */
    private ?string $onPremisesConnectionName;

    /**
     * The provisioning policy ID for the Cloud PC that consists of 32 characters in a GUID format. A policy defines the type of Cloud PC the user wants to create. Read-only.
     */
    private ?string $provisioningPolicyId;

    /**
     * The provisioning policy that applied during the provisioning of Cloud PCs. Maximum length is 120 characters. Read-only.
     */
    private ?string $provisioningPolicyName;

    /**
     * The type of licenses to be used when provisioning Cloud PCs using this policy. Possible values are: dedicated, shared, unknownFutureValue. The default value is dedicated.
     */
    private ?string $provisioningType;

    /**
     * The service plan ID for the Cloud PC that consists of 32 characters in a GUID format. For more information about service plans, see Product names and service plan identifiers for licensing. Read-only.
     */
    private ?string $servicePlanId;

    /**
     * The service plan name for the customer-facing Cloud PC entity. Read-only.
     */
    private ?string $servicePlanName;

    /**
     * The user principal name (UPN) of the user assigned to the Cloud PC. Maximum length is 113 characters. For more information on username policies, see Password policies and account restrictions in Microsoft Entra ID. Read-only.
     */
    private ?string $userPrincipalName;


    public function getAadDeviceId(): ?string
    {
        return $this->aadDeviceId;
    }

    public function setAadDeviceId(?string $aadDeviceId): self
    {
        $this->aadDeviceId = $aadDeviceId;
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

    public function getGracePeriodEndDateTime(): ?\DateTimeInterface
    {
        return $this->gracePeriodEndDateTime;
    }

    public function setGracePeriodEndDateTime(?\DateTimeInterface $gracePeriodEndDateTime): self
    {
        $this->gracePeriodEndDateTime = $gracePeriodEndDateTime;
        return $this;
    }

    public function getImageDisplayName(): ?string
    {
        return $this->imageDisplayName;
    }

    public function setImageDisplayName(?string $imageDisplayName): self
    {
        $this->imageDisplayName = $imageDisplayName;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getManagedDeviceId(): ?string
    {
        return $this->managedDeviceId;
    }

    public function setManagedDeviceId(?string $managedDeviceId): self
    {
        $this->managedDeviceId = $managedDeviceId;
        return $this;
    }

    public function getManagedDeviceName(): ?string
    {
        return $this->managedDeviceName;
    }

    public function setManagedDeviceName(?string $managedDeviceName): self
    {
        $this->managedDeviceName = $managedDeviceName;
        return $this;
    }

    public function getOnPremisesConnectionName(): ?string
    {
        return $this->onPremisesConnectionName;
    }

    public function setOnPremisesConnectionName(?string $onPremisesConnectionName): self
    {
        $this->onPremisesConnectionName = $onPremisesConnectionName;
        return $this;
    }

    public function getProvisioningPolicyId(): ?string
    {
        return $this->provisioningPolicyId;
    }

    public function setProvisioningPolicyId(?string $provisioningPolicyId): self
    {
        $this->provisioningPolicyId = $provisioningPolicyId;
        return $this;
    }

    public function getProvisioningPolicyName(): ?string
    {
        return $this->provisioningPolicyName;
    }

    public function setProvisioningPolicyName(?string $provisioningPolicyName): self
    {
        $this->provisioningPolicyName = $provisioningPolicyName;
        return $this;
    }

    public function getProvisioningType(): ?string
    {
        return $this->provisioningType;
    }

    public function setProvisioningType(?string $provisioningType): self
    {
        $this->provisioningType = $provisioningType;
        return $this;
    }

    public function getServicePlanId(): ?string
    {
        return $this->servicePlanId;
    }

    public function setServicePlanId(?string $servicePlanId): self
    {
        $this->servicePlanId = $servicePlanId;
        return $this;
    }

    public function getServicePlanName(): ?string
    {
        return $this->servicePlanName;
    }

    public function setServicePlanName(?string $servicePlanName): self
    {
        $this->servicePlanName = $servicePlanName;
        return $this;
    }

    public function getUserPrincipalName(): ?string
    {
        return $this->userPrincipalName;
    }

    public function setUserPrincipalName(?string $userPrincipalName): self
    {
        $this->userPrincipalName = $userPrincipalName;
        return $this;
    }

}
