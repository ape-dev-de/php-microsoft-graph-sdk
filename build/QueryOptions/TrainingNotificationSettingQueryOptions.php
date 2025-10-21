<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TrainingNotificationSetting resources
 *
 * Available select fields:
 */
class TrainingNotificationSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TrainingNotificationSetting
     */

    /**
     * Select specific TrainingNotificationSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
