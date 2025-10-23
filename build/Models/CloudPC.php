<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPC
 */
class CloudPC
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The Microsoft Entra device ID for the Cloud PC, also known as the Azure Active Directory (Azure AD) device ID, that consists of 32 characters in a GUID format. Generated on a VM joined to Microsoft Entra ID. Read-only. */
    public ?string $aadDeviceId = null;

    /** The display name for the Cloud PC. Maximum length is 64 characters. Read-only. You can use the cloudPC: rename API to modify the Cloud PC name. */
    public ?string $displayName = null;

    /** The date and time when the grace period ends and reprovisioning or deprovisioning happen. Required only if the status is inGracePeriod. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $gracePeriodEndDateTime = null;

    /** The name of the operating system image used for the Cloud PC. Maximum length is 50 characters. Only letters (A-Z, a-z), numbers (0-9), and special characters (-,,.) are allowed for this property. The property value can't begin or end with an underscore. Read-only. */
    public ?string $imageDisplayName = null;

    /** The last modified date and time of the Cloud PC. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The Intune enrolled device ID for the Cloud PC that consists of 32 characters in a GUID format. The managedDeviceId property of Windows 365 Business Cloud PCs is always null as Windows 365 Business Cloud PCs aren't Intune-enrolled automatically by Windows 365. Read-only. */
    public ?string $managedDeviceId = null;

    /** The Intune enrolled device name for the Cloud PC. The managedDeviceName property of Windows 365 Business Cloud PCs is always null as Windows 365 Business Cloud PCs aren't Intune-enrolled automatically by Windows 365. Read-only. */
    public ?string $managedDeviceName = null;

    /** The on-premises connection that applied during the provisioning of Cloud PCs. Read-only. */
    public ?string $onPremisesConnectionName = null;

    /** The provisioning policy ID for the Cloud PC that consists of 32 characters in a GUID format. A policy defines the type of Cloud PC the user wants to create. Read-only. */
    public ?string $provisioningPolicyId = null;

    /** The provisioning policy that applied during the provisioning of Cloud PCs. Maximum length is 120 characters. Read-only. */
    public ?string $provisioningPolicyName = null;

    /** 
     * The type of licenses to be used when provisioning Cloud PCs using this policy. Possible values are: dedicated, shared, unknownFutureValue. The default value is dedicated.
     * @var CloudPcProvisioningType|\stdClass|null
     */
    public mixed $provisioningType = null;

    /** The service plan ID for the Cloud PC that consists of 32 characters in a GUID format. For more information about service plans, see Product names and service plan identifiers for licensing. Read-only. */
    public ?string $servicePlanId = null;

    /** The service plan name for the customer-facing Cloud PC entity. Read-only. */
    public ?string $servicePlanName = null;

    /** The user principal name (UPN) of the user assigned to the Cloud PC. Maximum length is 113 characters. For more information on username policies, see Password policies and account restrictions in Microsoft Entra ID. Read-only. */
    public ?string $userPrincipalName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['aadDeviceId'])) {
            $this->aadDeviceId = $data['aadDeviceId'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['gracePeriodEndDateTime'])) {
            $this->gracePeriodEndDateTime = is_string($data['gracePeriodEndDateTime']) ? new \DateTimeImmutable($data['gracePeriodEndDateTime']) : $data['gracePeriodEndDateTime'];
        }
        if (isset($data['imageDisplayName'])) {
            $this->imageDisplayName = $data['imageDisplayName'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['managedDeviceId'])) {
            $this->managedDeviceId = $data['managedDeviceId'];
        }
        if (isset($data['managedDeviceName'])) {
            $this->managedDeviceName = $data['managedDeviceName'];
        }
        if (isset($data['onPremisesConnectionName'])) {
            $this->onPremisesConnectionName = $data['onPremisesConnectionName'];
        }
        if (isset($data['provisioningPolicyId'])) {
            $this->provisioningPolicyId = $data['provisioningPolicyId'];
        }
        if (isset($data['provisioningPolicyName'])) {
            $this->provisioningPolicyName = $data['provisioningPolicyName'];
        }
        if (isset($data['provisioningType'])) {
            $this->provisioningType = is_array($data['provisioningType']) ? new CloudPcProvisioningType($data['provisioningType']) : $data['provisioningType'];
        }
        if (isset($data['servicePlanId'])) {
            $this->servicePlanId = $data['servicePlanId'];
        }
        if (isset($data['servicePlanName'])) {
            $this->servicePlanName = $data['servicePlanName'];
        }
        if (isset($data['userPrincipalName'])) {
            $this->userPrincipalName = $data['userPrincipalName'];
        }
    }
}
