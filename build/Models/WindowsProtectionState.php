<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsProtectionState
 */
class WindowsProtectionState
{
    /**
     * Current anti malware version
     */
    private ?string $antiMalwareVersion;

    /**
     * Indicates device''s health state. Possible values are: clean, fullScanPending, rebootPending, manualStepsPending, offlineScanPending, critical. Possible values are: clean, fullScanPending, rebootPending, manualStepsPending, offlineScanPending, critical.
     */
    private ?string $deviceState;

    /**
     * Current endpoint protection engine's version
     */
    private ?string $engineVersion;

    /**
     * When TRUE indicates full scan is overdue, when FALSE indicates full scan is not overdue. Defaults to setting on client device.
     */
    private ?bool $fullScanOverdue;

    /**
     * When TRUE indicates full scan is required, when FALSE indicates full scan is not required. Defaults to setting on client device.
     */
    private ?bool $fullScanRequired;

    /**
     * When TRUE indicates the device is a virtual machine, when FALSE indicates the device is not a virtual machine. Defaults to setting on client device.
     */
    private ?bool $isVirtualMachine;

    /**
     * Last quick scan datetime
     */
    private ?\DateTimeInterface $lastFullScanDateTime;

    /**
     * Last full scan signature version
     */
    private ?string $lastFullScanSignatureVersion;

    /**
     * Last quick scan datetime
     */
    private ?\DateTimeInterface $lastQuickScanDateTime;

    /**
     * Last quick scan signature version
     */
    private ?string $lastQuickScanSignatureVersion;

    /**
     * Last device health status reported time
     */
    private ?\DateTimeInterface $lastReportedDateTime;

    /**
     * When TRUE indicates anti malware is enabled when FALSE indicates anti malware is not enabled.
     */
    private ?bool $malwareProtectionEnabled;

    /**
     * When TRUE indicates network inspection system enabled, when FALSE indicates network inspection system is not enabled. Defaults to setting on client device.
     */
    private ?bool $networkInspectionSystemEnabled;

    /**
     * Product Status of Windows Defender Antivirus. Possible values are: noStatus, serviceNotRunning, serviceStartedWithoutMalwareProtection, pendingFullScanDueToThreatAction, pendingRebootDueToThreatAction, pendingManualStepsDueToThreatAction, avSignaturesOutOfDate, asSignaturesOutOfDate, noQuickScanHappenedForSpecifiedPeriod, noFullScanHappenedForSpecifiedPeriod, systemInitiatedScanInProgress, systemInitiatedCleanInProgress, samplesPendingSubmission, productRunningInEvaluationMode, productRunningInNonGenuineMode, productExpired, offlineScanRequired, serviceShutdownAsPartOfSystemShutdown, threatRemediationFailedCritically, threatRemediationFailedNonCritically, noStatusFlagsSet, platformOutOfDate, platformUpdateInProgress, platformAboutToBeOutdated, signatureOrPlatformEndOfLifeIsPastOrIsImpending, windowsSModeSignaturesInUseOnNonWin10SInstall. Possible values are: noStatus, serviceNotRunning, serviceStartedWithoutMalwareProtection, pendingFullScanDueToThreatAction, pendingRebootDueToThreatAction, pendingManualStepsDueToThreatAction, avSignaturesOutOfDate, asSignaturesOutOfDate, noQuickScanHappenedForSpecifiedPeriod, noFullScanHappenedForSpecifiedPeriod, systemInitiatedScanInProgress, systemInitiatedCleanInProgress, samplesPendingSubmission, productRunningInEvaluationMode, productRunningInNonGenuineMode, productExpired, offlineScanRequired, serviceShutdownAsPartOfSystemShutdown, threatRemediationFailedCritically, threatRemediationFailedNonCritically, noStatusFlagsSet, platformOutOfDate, platformUpdateInProgress, platformAboutToBeOutdated, signatureOrPlatformEndOfLifeIsPastOrIsImpending, windowsSModeSignaturesInUseOnNonWin10SInstall.
     */
    private ?string $productStatus;

    /**
     * When TRUE indicates quick scan is overdue, when FALSE indicates quick scan is not overdue. Defaults to setting on client device.
     */
    private ?bool $quickScanOverdue;

    /**
     * When TRUE indicates real time protection is enabled, when FALSE indicates real time protection is not enabled. Defaults to setting on client device.
     */
    private ?bool $realTimeProtectionEnabled;

    /**
     * When TRUE indicates reboot is required, when FALSE indicates when TRUE indicates reboot is not required. Defaults to setting on client device.
     */
    private ?bool $rebootRequired;

    /**
     * When TRUE indicates signature is out of date, when FALSE indicates signature is not out of date. Defaults to setting on client device.
     */
    private ?bool $signatureUpdateOverdue;

    /**
     * Current malware definitions version
     */
    private ?string $signatureVersion;

    /**
     * When TRUE indicates the Windows Defender tamper protection feature is enabled, when FALSE indicates the Windows Defender tamper protection feature is not enabled. Defaults to setting on client device.
     */
    private ?bool $tamperProtectionEnabled;

    /**
     * Device protection status entity.
     * @var string[]
     */
    private array $detectedMalwareState = [];


    public function getAntiMalwareVersion(): ?string
    {
        return $this->antiMalwareVersion;
    }

    public function setAntiMalwareVersion(?string $antiMalwareVersion): self
    {
        $this->antiMalwareVersion = $antiMalwareVersion;
        return $this;
    }

    public function getDeviceState(): ?string
    {
        return $this->deviceState;
    }

    public function setDeviceState(?string $deviceState): self
    {
        $this->deviceState = $deviceState;
        return $this;
    }

    public function getEngineVersion(): ?string
    {
        return $this->engineVersion;
    }

    public function setEngineVersion(?string $engineVersion): self
    {
        $this->engineVersion = $engineVersion;
        return $this;
    }

    public function getFullScanOverdue(): ?bool
    {
        return $this->fullScanOverdue;
    }

    public function setFullScanOverdue(?bool $fullScanOverdue): self
    {
        $this->fullScanOverdue = $fullScanOverdue;
        return $this;
    }

    public function getFullScanRequired(): ?bool
    {
        return $this->fullScanRequired;
    }

    public function setFullScanRequired(?bool $fullScanRequired): self
    {
        $this->fullScanRequired = $fullScanRequired;
        return $this;
    }

    public function getIsVirtualMachine(): ?bool
    {
        return $this->isVirtualMachine;
    }

    public function setIsVirtualMachine(?bool $isVirtualMachine): self
    {
        $this->isVirtualMachine = $isVirtualMachine;
        return $this;
    }

    public function getLastFullScanDateTime(): ?\DateTimeInterface
    {
        return $this->lastFullScanDateTime;
    }

    public function setLastFullScanDateTime(?\DateTimeInterface $lastFullScanDateTime): self
    {
        $this->lastFullScanDateTime = $lastFullScanDateTime;
        return $this;
    }

    public function getLastFullScanSignatureVersion(): ?string
    {
        return $this->lastFullScanSignatureVersion;
    }

    public function setLastFullScanSignatureVersion(?string $lastFullScanSignatureVersion): self
    {
        $this->lastFullScanSignatureVersion = $lastFullScanSignatureVersion;
        return $this;
    }

    public function getLastQuickScanDateTime(): ?\DateTimeInterface
    {
        return $this->lastQuickScanDateTime;
    }

    public function setLastQuickScanDateTime(?\DateTimeInterface $lastQuickScanDateTime): self
    {
        $this->lastQuickScanDateTime = $lastQuickScanDateTime;
        return $this;
    }

    public function getLastQuickScanSignatureVersion(): ?string
    {
        return $this->lastQuickScanSignatureVersion;
    }

    public function setLastQuickScanSignatureVersion(?string $lastQuickScanSignatureVersion): self
    {
        $this->lastQuickScanSignatureVersion = $lastQuickScanSignatureVersion;
        return $this;
    }

    public function getLastReportedDateTime(): ?\DateTimeInterface
    {
        return $this->lastReportedDateTime;
    }

    public function setLastReportedDateTime(?\DateTimeInterface $lastReportedDateTime): self
    {
        $this->lastReportedDateTime = $lastReportedDateTime;
        return $this;
    }

    public function getMalwareProtectionEnabled(): ?bool
    {
        return $this->malwareProtectionEnabled;
    }

    public function setMalwareProtectionEnabled(?bool $malwareProtectionEnabled): self
    {
        $this->malwareProtectionEnabled = $malwareProtectionEnabled;
        return $this;
    }

    public function getNetworkInspectionSystemEnabled(): ?bool
    {
        return $this->networkInspectionSystemEnabled;
    }

    public function setNetworkInspectionSystemEnabled(?bool $networkInspectionSystemEnabled): self
    {
        $this->networkInspectionSystemEnabled = $networkInspectionSystemEnabled;
        return $this;
    }

    public function getProductStatus(): ?string
    {
        return $this->productStatus;
    }

    public function setProductStatus(?string $productStatus): self
    {
        $this->productStatus = $productStatus;
        return $this;
    }

    public function getQuickScanOverdue(): ?bool
    {
        return $this->quickScanOverdue;
    }

    public function setQuickScanOverdue(?bool $quickScanOverdue): self
    {
        $this->quickScanOverdue = $quickScanOverdue;
        return $this;
    }

    public function getRealTimeProtectionEnabled(): ?bool
    {
        return $this->realTimeProtectionEnabled;
    }

    public function setRealTimeProtectionEnabled(?bool $realTimeProtectionEnabled): self
    {
        $this->realTimeProtectionEnabled = $realTimeProtectionEnabled;
        return $this;
    }

    public function getRebootRequired(): ?bool
    {
        return $this->rebootRequired;
    }

    public function setRebootRequired(?bool $rebootRequired): self
    {
        $this->rebootRequired = $rebootRequired;
        return $this;
    }

    public function getSignatureUpdateOverdue(): ?bool
    {
        return $this->signatureUpdateOverdue;
    }

    public function setSignatureUpdateOverdue(?bool $signatureUpdateOverdue): self
    {
        $this->signatureUpdateOverdue = $signatureUpdateOverdue;
        return $this;
    }

    public function getSignatureVersion(): ?string
    {
        return $this->signatureVersion;
    }

    public function setSignatureVersion(?string $signatureVersion): self
    {
        $this->signatureVersion = $signatureVersion;
        return $this;
    }

    public function getTamperProtectionEnabled(): ?bool
    {
        return $this->tamperProtectionEnabled;
    }

    public function setTamperProtectionEnabled(?bool $tamperProtectionEnabled): self
    {
        $this->tamperProtectionEnabled = $tamperProtectionEnabled;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getDetectedMalwareState(): array
    {
        return $this->detectedMalwareState;
    }

    /**
     * @param string[] $detectedMalwareState
     */
    public function setDetectedMalwareState(array $detectedMalwareState): self
    {
        $this->detectedMalwareState = $detectedMalwareState;
        return $this;
    }

}
