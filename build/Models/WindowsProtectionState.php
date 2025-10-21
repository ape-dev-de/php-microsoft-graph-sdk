<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsProtectionState
 */
class WindowsProtectionState
{
    public function __construct(
        /** Current anti malware version */
        public ?string $antiMalwareVersion = null,
        /** Indicates device''s health state. Possible values are: clean, fullScanPending, rebootPending, manualStepsPending, offlineScanPending, critical. Possible values are: clean, fullScanPending, rebootPending, manualStepsPending, offlineScanPending, critical. */
        public ?string $deviceState = null,
        /** Current endpoint protection engine's version */
        public ?string $engineVersion = null,
        /** When TRUE indicates full scan is overdue, when FALSE indicates full scan is not overdue. Defaults to setting on client device. */
        public ?bool $fullScanOverdue = null,
        /** When TRUE indicates full scan is required, when FALSE indicates full scan is not required. Defaults to setting on client device. */
        public ?bool $fullScanRequired = null,
        /** When TRUE indicates the device is a virtual machine, when FALSE indicates the device is not a virtual machine. Defaults to setting on client device. */
        public ?bool $isVirtualMachine = null,
        /** Last quick scan datetime */
        public ?\DateTimeInterface $lastFullScanDateTime = null,
        /** Last full scan signature version */
        public ?string $lastFullScanSignatureVersion = null,
        /** Last quick scan datetime */
        public ?\DateTimeInterface $lastQuickScanDateTime = null,
        /** Last quick scan signature version */
        public ?string $lastQuickScanSignatureVersion = null,
        /** Last device health status reported time */
        public ?\DateTimeInterface $lastReportedDateTime = null,
        /** When TRUE indicates anti malware is enabled when FALSE indicates anti malware is not enabled. */
        public ?bool $malwareProtectionEnabled = null,
        /** When TRUE indicates network inspection system enabled, when FALSE indicates network inspection system is not enabled. Defaults to setting on client device. */
        public ?bool $networkInspectionSystemEnabled = null,
        /** Product Status of Windows Defender Antivirus. Possible values are: noStatus, serviceNotRunning, serviceStartedWithoutMalwareProtection, pendingFullScanDueToThreatAction, pendingRebootDueToThreatAction, pendingManualStepsDueToThreatAction, avSignaturesOutOfDate, asSignaturesOutOfDate, noQuickScanHappenedForSpecifiedPeriod, noFullScanHappenedForSpecifiedPeriod, systemInitiatedScanInProgress, systemInitiatedCleanInProgress, samplesPendingSubmission, productRunningInEvaluationMode, productRunningInNonGenuineMode, productExpired, offlineScanRequired, serviceShutdownAsPartOfSystemShutdown, threatRemediationFailedCritically, threatRemediationFailedNonCritically, noStatusFlagsSet, platformOutOfDate, platformUpdateInProgress, platformAboutToBeOutdated, signatureOrPlatformEndOfLifeIsPastOrIsImpending, windowsSModeSignaturesInUseOnNonWin10SInstall. Possible values are: noStatus, serviceNotRunning, serviceStartedWithoutMalwareProtection, pendingFullScanDueToThreatAction, pendingRebootDueToThreatAction, pendingManualStepsDueToThreatAction, avSignaturesOutOfDate, asSignaturesOutOfDate, noQuickScanHappenedForSpecifiedPeriod, noFullScanHappenedForSpecifiedPeriod, systemInitiatedScanInProgress, systemInitiatedCleanInProgress, samplesPendingSubmission, productRunningInEvaluationMode, productRunningInNonGenuineMode, productExpired, offlineScanRequired, serviceShutdownAsPartOfSystemShutdown, threatRemediationFailedCritically, threatRemediationFailedNonCritically, noStatusFlagsSet, platformOutOfDate, platformUpdateInProgress, platformAboutToBeOutdated, signatureOrPlatformEndOfLifeIsPastOrIsImpending, windowsSModeSignaturesInUseOnNonWin10SInstall. */
        public ?string $productStatus = null,
        /** When TRUE indicates quick scan is overdue, when FALSE indicates quick scan is not overdue. Defaults to setting on client device. */
        public ?bool $quickScanOverdue = null,
        /** When TRUE indicates real time protection is enabled, when FALSE indicates real time protection is not enabled. Defaults to setting on client device. */
        public ?bool $realTimeProtectionEnabled = null,
        /** When TRUE indicates reboot is required, when FALSE indicates when TRUE indicates reboot is not required. Defaults to setting on client device. */
        public ?bool $rebootRequired = null,
        /** When TRUE indicates signature is out of date, when FALSE indicates signature is not out of date. Defaults to setting on client device. */
        public ?bool $signatureUpdateOverdue = null,
        /** Current malware definitions version */
        public ?string $signatureVersion = null,
        /** When TRUE indicates the Windows Defender tamper protection feature is enabled, when FALSE indicates the Windows Defender tamper protection feature is not enabled. Defaults to setting on client device. */
        public ?bool $tamperProtectionEnabled = null,
        /** @var string[] Device protection status entity. */
        public array $detectedMalwareState = []
    ) {}
}
