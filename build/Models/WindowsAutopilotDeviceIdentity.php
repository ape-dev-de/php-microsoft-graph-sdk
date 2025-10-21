<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsAutopilotDeviceIdentity
 */
class WindowsAutopilotDeviceIdentity
{
    /**
     * Addressable user name.
     */
    private ?string $addressableUserName;

    /**
     * AAD Device ID - to be deprecated
     */
    private ?string $azureActiveDirectoryDeviceId;

    /**
     * Display Name
     */
    private ?string $displayName;

    /**
     */
    private ?string $enrollmentState;

    /**
     * Group Tag of the Windows autopilot device.
     */
    private ?string $groupTag;

    /**
     * Intune Last Contacted Date Time of the Windows autopilot device.
     */
    private ?\DateTimeInterface $lastContactedDateTime;

    /**
     * Managed Device ID
     */
    private ?string $managedDeviceId;

    /**
     * Oem manufacturer of the Windows autopilot device.
     */
    private ?string $manufacturer;

    /**
     * Model name of the Windows autopilot device.
     */
    private ?string $model;

    /**
     * Product Key of the Windows autopilot device.
     */
    private ?string $productKey;

    /**
     * Purchase Order Identifier of the Windows autopilot device.
     */
    private ?string $purchaseOrderIdentifier;

    /**
     * Resource Name.
     */
    private ?string $resourceName;

    /**
     * Serial number of the Windows autopilot device.
     */
    private ?string $serialNumber;

    /**
     * SKU Number
     */
    private ?string $skuNumber;

    /**
     * System Family
     */
    private ?string $systemFamily;

    /**
     * The windowsAutopilotDeviceIdentity resource represents a Windows Autopilot Device.
     */
    private ?string $userPrincipalName;


    public function getAddressableUserName(): ?string
    {
        return $this->addressableUserName;
    }

    public function setAddressableUserName(?string $addressableUserName): self
    {
        $this->addressableUserName = $addressableUserName;
        return $this;
    }

    public function getAzureActiveDirectoryDeviceId(): ?string
    {
        return $this->azureActiveDirectoryDeviceId;
    }

    public function setAzureActiveDirectoryDeviceId(?string $azureActiveDirectoryDeviceId): self
    {
        $this->azureActiveDirectoryDeviceId = $azureActiveDirectoryDeviceId;
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

    public function getEnrollmentState(): ?string
    {
        return $this->enrollmentState;
    }

    public function setEnrollmentState(?string $enrollmentState): self
    {
        $this->enrollmentState = $enrollmentState;
        return $this;
    }

    public function getGroupTag(): ?string
    {
        return $this->groupTag;
    }

    public function setGroupTag(?string $groupTag): self
    {
        $this->groupTag = $groupTag;
        return $this;
    }

    public function getLastContactedDateTime(): ?\DateTimeInterface
    {
        return $this->lastContactedDateTime;
    }

    public function setLastContactedDateTime(?\DateTimeInterface $lastContactedDateTime): self
    {
        $this->lastContactedDateTime = $lastContactedDateTime;
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

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?string $manufacturer): self
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;
        return $this;
    }

    public function getProductKey(): ?string
    {
        return $this->productKey;
    }

    public function setProductKey(?string $productKey): self
    {
        $this->productKey = $productKey;
        return $this;
    }

    public function getPurchaseOrderIdentifier(): ?string
    {
        return $this->purchaseOrderIdentifier;
    }

    public function setPurchaseOrderIdentifier(?string $purchaseOrderIdentifier): self
    {
        $this->purchaseOrderIdentifier = $purchaseOrderIdentifier;
        return $this;
    }

    public function getResourceName(): ?string
    {
        return $this->resourceName;
    }

    public function setResourceName(?string $resourceName): self
    {
        $this->resourceName = $resourceName;
        return $this;
    }

    public function getSerialNumber(): ?string
    {
        return $this->serialNumber;
    }

    public function setSerialNumber(?string $serialNumber): self
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    public function getSkuNumber(): ?string
    {
        return $this->skuNumber;
    }

    public function setSkuNumber(?string $skuNumber): self
    {
        $this->skuNumber = $skuNumber;
        return $this;
    }

    public function getSystemFamily(): ?string
    {
        return $this->systemFamily;
    }

    public function setSystemFamily(?string $systemFamily): self
    {
        $this->systemFamily = $systemFamily;
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
