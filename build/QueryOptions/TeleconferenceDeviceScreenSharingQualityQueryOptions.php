<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeleconferenceDeviceScreenSharingQuality resources
 *
 * Available select fields:
 */
class TeleconferenceDeviceScreenSharingQualityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeleconferenceDeviceScreenSharingQuality
     */

    /**
     * Select specific TeleconferenceDeviceScreenSharingQuality properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
