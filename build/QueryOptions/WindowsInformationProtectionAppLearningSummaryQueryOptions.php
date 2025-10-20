<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionAppLearningSummary resources
 *
 * Available select fields:
 * - applicationName
 * - applicationType
 * - deviceCount
 */
class WindowsInformationProtectionAppLearningSummaryQueryOptions extends QueryOptions
{
    public const FIELD_APPLICATION_NAME = 'applicationName';
    public const FIELD_APPLICATION_TYPE = 'applicationType';
    public const FIELD_DEVICE_COUNT = 'deviceCount';

    /**
     * Select specific WindowsInformationProtectionAppLearningSummary properties
     * 
     * @param array<string> $select Use WindowsInformationProtectionAppLearningSummaryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
