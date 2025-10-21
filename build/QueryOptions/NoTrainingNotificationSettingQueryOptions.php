<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for NoTrainingNotificationSetting resources
 *
 * Available select fields:
 */
class NoTrainingNotificationSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for NoTrainingNotificationSetting
     */

    /**
     * Select specific NoTrainingNotificationSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
