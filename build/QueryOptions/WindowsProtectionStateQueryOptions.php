<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsProtectionState resources
 *
 * Available select fields:
 * - antiMalwareVersion
 * - deviceState
 * - engineVersion
 * - fullScanOverdue
 * - fullScanRequired
 * - isVirtualMachine
 * - lastFullScanDateTime
 * - lastFullScanSignatureVersion
 * - lastQuickScanDateTime
 * - lastQuickScanSignatureVersion
 * - lastReportedDateTime
 * - malwareProtectionEnabled
 * - networkInspectionSystemEnabled
 * - productStatus
 * - quickScanOverdue
 * - realTimeProtectionEnabled
 * - rebootRequired
 * - signatureUpdateOverdue
 * - signatureVersion
 * - tamperProtectionEnabled
 * - detectedMalwareState
 */
class WindowsProtectionStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsProtectionState
     */
    public const FIELD_ANTI_MALWARE_VERSION = 'antiMalwareVersion';
    public const FIELD_DEVICE_STATE = 'deviceState';
    public const FIELD_ENGINE_VERSION = 'engineVersion';
    public const FIELD_FULL_SCAN_OVERDUE = 'fullScanOverdue';
    public const FIELD_FULL_SCAN_REQUIRED = 'fullScanRequired';
    public const FIELD_IS_VIRTUAL_MACHINE = 'isVirtualMachine';
    public const FIELD_LAST_FULL_SCAN_DATE_TIME = 'lastFullScanDateTime';
    public const FIELD_LAST_FULL_SCAN_SIGNATURE_VERSION = 'lastFullScanSignatureVersion';
    public const FIELD_LAST_QUICK_SCAN_DATE_TIME = 'lastQuickScanDateTime';
    public const FIELD_LAST_QUICK_SCAN_SIGNATURE_VERSION = 'lastQuickScanSignatureVersion';
    public const FIELD_LAST_REPORTED_DATE_TIME = 'lastReportedDateTime';
    public const FIELD_MALWARE_PROTECTION_ENABLED = 'malwareProtectionEnabled';
    public const FIELD_NETWORK_INSPECTION_SYSTEM_ENABLED = 'networkInspectionSystemEnabled';
    public const FIELD_PRODUCT_STATUS = 'productStatus';
    public const FIELD_QUICK_SCAN_OVERDUE = 'quickScanOverdue';
    public const FIELD_REAL_TIME_PROTECTION_ENABLED = 'realTimeProtectionEnabled';
    public const FIELD_REBOOT_REQUIRED = 'rebootRequired';
    public const FIELD_SIGNATURE_UPDATE_OVERDUE = 'signatureUpdateOverdue';
    public const FIELD_SIGNATURE_VERSION = 'signatureVersion';
    public const FIELD_TAMPER_PROTECTION_ENABLED = 'tamperProtectionEnabled';
    public const FIELD_DETECTED_MALWARE_STATE = 'detectedMalwareState';

    /**
     * Select specific WindowsProtectionState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
