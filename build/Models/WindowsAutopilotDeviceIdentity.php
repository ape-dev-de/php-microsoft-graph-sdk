<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsAutopilotDeviceIdentity
 */
class WindowsAutopilotDeviceIdentity
{
    public function __construct(
        /** Addressable user name. */
        public ?string $addressableUserName = null,
        /** AAD Device ID - to be deprecated */
        public ?string $azureActiveDirectoryDeviceId = null,
        /** Display Name */
        public ?string $displayName = null,
        /**  */
        public ?string $enrollmentState = null,
        /** Group Tag of the Windows autopilot device. */
        public ?string $groupTag = null,
        /** Intune Last Contacted Date Time of the Windows autopilot device. */
        public ?\DateTimeInterface $lastContactedDateTime = null,
        /** Managed Device ID */
        public ?string $managedDeviceId = null,
        /** Oem manufacturer of the Windows autopilot device. */
        public ?string $manufacturer = null,
        /** Model name of the Windows autopilot device. */
        public ?string $model = null,
        /** Product Key of the Windows autopilot device. */
        public ?string $productKey = null,
        /** Purchase Order Identifier of the Windows autopilot device. */
        public ?string $purchaseOrderIdentifier = null,
        /** Resource Name. */
        public ?string $resourceName = null,
        /** Serial number of the Windows autopilot device. */
        public ?string $serialNumber = null,
        /** SKU Number */
        public ?string $skuNumber = null,
        /** System Family */
        public ?string $systemFamily = null,
        /** The windowsAutopilotDeviceIdentity resource represents a Windows Autopilot Device. */
        public ?string $userPrincipalName = null
    ) {}
}
