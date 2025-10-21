<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeleconferenceDeviceVideoQuality resources
 *
 * Available select fields:
 */
class TeleconferenceDeviceVideoQualityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeleconferenceDeviceVideoQuality
     */

    /**
     * Select specific TeleconferenceDeviceVideoQuality properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
