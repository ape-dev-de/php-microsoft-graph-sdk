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
    public const FIELD_DELIVERY_FREQUENCY = 'deliveryFrequency';

    /**
     * Select specific TrainingReminderNotification properties
     * 
     * @param array<string> $select Use TrainingReminderNotificationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
