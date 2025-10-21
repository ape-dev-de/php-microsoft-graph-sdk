<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TrainingReminderNotification resources
 *
 * Available select fields:
 * - deliveryFrequency
 */
class TrainingReminderNotificationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TrainingReminderNotification
     */
    public const FIELD_DELIVERY_FREQUENCY = 'deliveryFrequency';

    /**
     * Select specific TrainingReminderNotification properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
