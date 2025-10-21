<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EndUserNotificationSettingType resources
 *
 * Available select fields:
 */
class EndUserNotificationSettingTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EndUserNotificationSettingType
     */

    /**
     * Select specific EndUserNotificationSettingType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
