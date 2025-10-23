<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsAutopilotDeviceIdentity
 */
class WindowsAutopilotDeviceIdentity
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Addressable user name. */
    public ?string $addressableUserName = null;

    /** AAD Device ID - to be deprecated */
    public ?string $azureActiveDirectoryDeviceId = null;

    /** Display Name */
    public ?string $displayName = null;

    /**  */
    public ?EnrollmentState $enrollmentState = null;

    /** Group Tag of the Windows autopilot device. */
    public ?string $groupTag = null;

    /** Intune Last Contacted Date Time of the Windows autopilot device. */
    public ?\DateTimeInterface $lastContactedDateTime = null;

    /** Managed Device ID */
    public ?string $managedDeviceId = null;

    /** Oem manufacturer of the Windows autopilot device. */
    public ?string $manufacturer = null;

    /** Model name of the Windows autopilot device. */
    public ?string $model = null;

    /** Product Key of the Windows autopilot device. */
    public ?string $productKey = null;

    /** Purchase Order Identifier of the Windows autopilot device. */
    public ?string $purchaseOrderIdentifier = null;

    /** Resource Name. */
    public ?string $resourceName = null;

    /** Serial number of the Windows autopilot device. */
    public ?string $serialNumber = null;

    /** SKU Number */
    public ?string $skuNumber = null;

    /** System Family */
    public ?string $systemFamily = null;

    /** User Principal Name. */
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
        if (isset($data['addressableUserName'])) {
            $this->addressableUserName = $data['addressableUserName'];
        }
        if (isset($data['azureActiveDirectoryDeviceId'])) {
            $this->azureActiveDirectoryDeviceId = $data['azureActiveDirectoryDeviceId'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['enrollmentState'])) {
            $this->enrollmentState = $data['enrollmentState'];
        }
        if (isset($data['groupTag'])) {
            $this->groupTag = $data['groupTag'];
        }
        if (isset($data['lastContactedDateTime'])) {
            $this->lastContactedDateTime = is_string($data['lastContactedDateTime']) ? new \DateTimeImmutable($data['lastContactedDateTime']) : $data['lastContactedDateTime'];
        }
        if (isset($data['managedDeviceId'])) {
            $this->managedDeviceId = $data['managedDeviceId'];
        }
        if (isset($data['manufacturer'])) {
            $this->manufacturer = $data['manufacturer'];
        }
        if (isset($data['model'])) {
            $this->model = $data['model'];
        }
        if (isset($data['productKey'])) {
            $this->productKey = $data['productKey'];
        }
        if (isset($data['purchaseOrderIdentifier'])) {
            $this->purchaseOrderIdentifier = $data['purchaseOrderIdentifier'];
        }
        if (isset($data['resourceName'])) {
            $this->resourceName = $data['resourceName'];
        }
        if (isset($data['serialNumber'])) {
            $this->serialNumber = $data['serialNumber'];
        }
        if (isset($data['skuNumber'])) {
            $this->skuNumber = $data['skuNumber'];
        }
        if (isset($data['systemFamily'])) {
            $this->systemFamily = $data['systemFamily'];
        }
        if (isset($data['userPrincipalName'])) {
            $this->userPrincipalName = $data['userPrincipalName'];
        }
    }
}
