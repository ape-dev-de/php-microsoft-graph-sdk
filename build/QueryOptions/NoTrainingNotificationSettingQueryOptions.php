<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for NoTrainingNotificationSetting resources
 *
 * Available select fields:
 * - simulationNotification
 */
class NoTrainingNotificationSettingQueryOptions extends QueryOptions
{
    public const FIELD_SIMULATION_NOTIFICATION = 'simulationNotification';

    /**
     * Select specific NoTrainingNotificationSetting properties
     * 
     * @param array<string> $select Use NoTrainingNotificationSettingQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
