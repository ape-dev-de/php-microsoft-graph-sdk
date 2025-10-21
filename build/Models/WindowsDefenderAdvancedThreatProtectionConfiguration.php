<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsDefenderAdvancedThreatProtectionConfiguration
 */
class WindowsDefenderAdvancedThreatProtectionConfiguration
{
    public function __construct(
        /** Windows Defender AdvancedThreatProtection 'Allow Sample Sharing' Rule */
        public ?bool $allowSampleSharing = null,
        /** Windows Defender AdvancedThreatProtection Configuration. */
        public ?string $enableExpeditedTelemetryReporting = null
    ) {}
}
