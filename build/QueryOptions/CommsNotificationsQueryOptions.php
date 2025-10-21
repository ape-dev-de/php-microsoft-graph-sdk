<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CommsNotifications resources
 *
 * Available select fields:
 * - value
 */
class CommsNotificationsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CommsNotifications
     */
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CommsNotifications properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
