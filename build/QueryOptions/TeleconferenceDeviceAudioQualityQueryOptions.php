<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeleconferenceDeviceAudioQuality resources
 *
 * Available select fields:
 */
class TeleconferenceDeviceAudioQualityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeleconferenceDeviceAudioQuality
     */

    /**
     * Select specific TeleconferenceDeviceAudioQuality properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
