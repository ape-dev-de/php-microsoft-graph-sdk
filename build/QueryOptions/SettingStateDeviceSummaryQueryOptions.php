<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SettingStateDeviceSummary resources
 *
 * Available select fields:
 */
class SettingStateDeviceSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SettingStateDeviceSummary
     */

    /**
     * Select specific SettingStateDeviceSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
