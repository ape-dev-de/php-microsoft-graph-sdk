<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsDefenderAdvancedThreatProtectionConfiguration resources
 *
 * Available select fields:
 * - allowSampleSharing
 * - enableExpeditedTelemetryReporting
 */
class WindowsDefenderAdvancedThreatProtectionConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsDefenderAdvancedThreatProtectionConfiguration
     */
    public const FIELD_ALLOW_SAMPLE_SHARING = 'allowSampleSharing';
    public const FIELD_ENABLE_EXPEDITED_TELEMETRY_REPORTING = 'enableExpeditedTelemetryReporting';

    /**
     * Select specific WindowsDefenderAdvancedThreatProtectionConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
