<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsDefenderAdvancedThreatProtectionConfiguration
 */
class WindowsDefenderAdvancedThreatProtectionConfiguration
{
    /**
     * Windows Defender AdvancedThreatProtection 'Allow Sample Sharing' Rule
     */
    private ?bool $allowSampleSharing;

    /**
     * Windows Defender AdvancedThreatProtection Configuration.
     */
    private ?string $enableExpeditedTelemetryReporting;

    public function getAllowSampleSharing(): ?bool
    {
        return $this->allowSampleSharing;
    }

    public function setAllowSampleSharing(?bool $allowSampleSharing): self
    {
        $this->allowSampleSharing = $allowSampleSharing;
        return $this;
    }

    public function getEnableExpeditedTelemetryReporting(): ?string
    {
        return $this->enableExpeditedTelemetryReporting;
    }

    public function setEnableExpeditedTelemetryReporting(?string $enableExpeditedTelemetryReporting): self
    {
        $this->enableExpeditedTelemetryReporting = $enableExpeditedTelemetryReporting;
        return $this;
    }

}
