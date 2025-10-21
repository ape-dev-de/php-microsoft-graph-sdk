<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionNetworkLearningSummary resources
 *
 * Available select fields:
 * - deviceCount
 * - url
 */
class WindowsInformationProtectionNetworkLearningSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsInformationProtectionNetworkLearningSummary
     */
    public const FIELD_DEVICE_COUNT = 'deviceCount';
    public const FIELD_URL = 'url';

    /**
     * Select specific WindowsInformationProtectionNetworkLearningSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
