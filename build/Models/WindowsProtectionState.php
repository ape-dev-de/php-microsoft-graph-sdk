<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsProtectionState
 */
class WindowsProtectionState
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Current anti malware version */
    public ?string $antiMalwareVersion = null;

    /** 
     * Indicates device's health state. Possible values are: clean, fullScanPending, rebootPending, manualStepsPending, offlineScanPending, critical. Possible values are: clean, fullScanPending, rebootPending, manualStepsPending, offlineScanPending, critical.
     * @var WindowsDeviceHealthState|\stdClass|null
     */
    public mixed $deviceState = null;

    /** Current endpoint protection engine's version */
    public ?string $engineVersion = null;

    /** When TRUE indicates full scan is overdue, when FALSE indicates full scan is not overdue. Defaults to setting on client device. */
    public ?bool $fullScanOverdue = null;

    /** When TRUE indicates full scan is required, when FALSE indicates full scan is not required. Defaults to setting on client device. */
    public ?bool $fullScanRequired = null;

    /** When TRUE indicates the device is a virtual machine, when FALSE indicates the device is not a virtual machine. Defaults to setting on client device. */
    public ?bool $isVirtualMachine = null;

    /** Last quick scan datetime */
    public ?\DateTimeInterface $lastFullScanDateTime = null;

    /** Last full scan signature version */
    public ?string $lastFullScanSignatureVersion = null;

    /** Last quick scan datetime */
    public ?\DateTimeInterface $lastQuickScanDateTime = null;

    /** Last quick scan signature version */
    public ?string $lastQuickScanSignatureVersion = null;

    /** Last device health status reported time */
    public ?\DateTimeInterface $lastReportedDateTime = null;

    /** When TRUE indicates anti malware is enabled when FALSE indicates anti malware is not enabled. */
    public ?bool $malwareProtectionEnabled = null;

    /** When TRUE indicates network inspection system enabled, when FALSE indicates network inspection system is not enabled. Defaults to setting on client device. */
    public ?bool $networkInspectionSystemEnabled = null;

    /** 
     * Product Status of Windows Defender Antivirus. Possible values are: noStatus, serviceNotRunning, serviceStartedWithoutMalwareProtection, pendingFullScanDueToThreatAction, pendingRebootDueToThreatAction, pendingManualStepsDueToThreatAction, avSignaturesOutOfDate, asSignaturesOutOfDate, noQuickScanHappenedForSpecifiedPeriod, noFullScanHappenedForSpecifiedPeriod, systemInitiatedScanInProgress, systemInitiatedCleanInProgress, samplesPendingSubmission, productRunningInEvaluationMode, productRunningInNonGenuineMode, productExpired, offlineScanRequired, serviceShutdownAsPartOfSystemShutdown, threatRemediationFailedCritically, threatRemediationFailedNonCritically, noStatusFlagsSet, platformOutOfDate, platformUpdateInProgress, platformAboutToBeOutdated, signatureOrPlatformEndOfLifeIsPastOrIsImpending, windowsSModeSignaturesInUseOnNonWin10SInstall. Possible values are: noStatus, serviceNotRunning, serviceStartedWithoutMalwareProtection, pendingFullScanDueToThreatAction, pendingRebootDueToThreatAction, pendingManualStepsDueToThreatAction, avSignaturesOutOfDate, asSignaturesOutOfDate, noQuickScanHappenedForSpecifiedPeriod, noFullScanHappenedForSpecifiedPeriod, systemInitiatedScanInProgress, systemInitiatedCleanInProgress, samplesPendingSubmission, productRunningInEvaluationMode, productRunningInNonGenuineMode, productExpired, offlineScanRequired, serviceShutdownAsPartOfSystemShutdown, threatRemediationFailedCritically, threatRemediationFailedNonCritically, noStatusFlagsSet, platformOutOfDate, platformUpdateInProgress, platformAboutToBeOutdated, signatureOrPlatformEndOfLifeIsPastOrIsImpending, windowsSModeSignaturesInUseOnNonWin10SInstall.
     * @var WindowsDefenderProductStatus|\stdClass|null
     */
    public mixed $productStatus = null;

    /** When TRUE indicates quick scan is overdue, when FALSE indicates quick scan is not overdue. Defaults to setting on client device. */
    public ?bool $quickScanOverdue = null;

    /** When TRUE indicates real time protection is enabled, when FALSE indicates real time protection is not enabled. Defaults to setting on client device. */
    public ?bool $realTimeProtectionEnabled = null;

    /** When TRUE indicates reboot is required, when FALSE indicates when TRUE indicates reboot is not required. Defaults to setting on client device. */
    public ?bool $rebootRequired = null;

    /** When TRUE indicates signature is out of date, when FALSE indicates signature is not out of date. Defaults to setting on client device. */
    public ?bool $signatureUpdateOverdue = null;

    /** Current malware definitions version */
    public ?string $signatureVersion = null;

    /** When TRUE indicates the Windows Defender tamper protection feature is enabled, when FALSE indicates the Windows Defender tamper protection feature is not enabled. Defaults to setting on client device. */
    public ?bool $tamperProtectionEnabled = null;

    /** 
     * Device malware list
     * @var WindowsDeviceMalwareState[]
     */
    public array $detectedMalwareState = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['antiMalwareVersion'])) {
            $this->antiMalwareVersion = $data['antiMalwareVersion'];
        }
        if (isset($data['deviceState'])) {
            $this->deviceState = is_array($data['deviceState']) ? new WindowsDeviceHealthState($data['deviceState']) : $data['deviceState'];
        }
        if (isset($data['engineVersion'])) {
            $this->engineVersion = $data['engineVersion'];
        }
        if (isset($data['fullScanOverdue'])) {
            $this->fullScanOverdue = $data['fullScanOverdue'];
        }
        if (isset($data['fullScanRequired'])) {
            $this->fullScanRequired = $data['fullScanRequired'];
        }
        if (isset($data['isVirtualMachine'])) {
            $this->isVirtualMachine = $data['isVirtualMachine'];
        }
        if (isset($data['lastFullScanDateTime'])) {
            $this->lastFullScanDateTime = is_string($data['lastFullScanDateTime']) ? new \DateTimeImmutable($data['lastFullScanDateTime']) : $data['lastFullScanDateTime'];
        }
        if (isset($data['lastFullScanSignatureVersion'])) {
            $this->lastFullScanSignatureVersion = $data['lastFullScanSignatureVersion'];
        }
        if (isset($data['lastQuickScanDateTime'])) {
            $this->lastQuickScanDateTime = is_string($data['lastQuickScanDateTime']) ? new \DateTimeImmutable($data['lastQuickScanDateTime']) : $data['lastQuickScanDateTime'];
        }
        if (isset($data['lastQuickScanSignatureVersion'])) {
            $this->lastQuickScanSignatureVersion = $data['lastQuickScanSignatureVersion'];
        }
        if (isset($data['lastReportedDateTime'])) {
            $this->lastReportedDateTime = is_string($data['lastReportedDateTime']) ? new \DateTimeImmutable($data['lastReportedDateTime']) : $data['lastReportedDateTime'];
        }
        if (isset($data['malwareProtectionEnabled'])) {
            $this->malwareProtectionEnabled = $data['malwareProtectionEnabled'];
        }
        if (isset($data['networkInspectionSystemEnabled'])) {
            $this->networkInspectionSystemEnabled = $data['networkInspectionSystemEnabled'];
        }
        if (isset($data['productStatus'])) {
            $this->productStatus = is_array($data['productStatus']) ? new WindowsDefenderProductStatus($data['productStatus']) : $data['productStatus'];
        }
        if (isset($data['quickScanOverdue'])) {
            $this->quickScanOverdue = $data['quickScanOverdue'];
        }
        if (isset($data['realTimeProtectionEnabled'])) {
            $this->realTimeProtectionEnabled = $data['realTimeProtectionEnabled'];
        }
        if (isset($data['rebootRequired'])) {
            $this->rebootRequired = $data['rebootRequired'];
        }
        if (isset($data['signatureUpdateOverdue'])) {
            $this->signatureUpdateOverdue = $data['signatureUpdateOverdue'];
        }
        if (isset($data['signatureVersion'])) {
            $this->signatureVersion = $data['signatureVersion'];
        }
        if (isset($data['tamperProtectionEnabled'])) {
            $this->tamperProtectionEnabled = $data['tamperProtectionEnabled'];
        }
        if (isset($data['detectedMalwareState'])) {
            $this->detectedMalwareState = $data['detectedMalwareState'];
        }
    }
}
