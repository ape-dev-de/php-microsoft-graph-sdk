<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CommsNotification resources
 *
 * Available select fields:
 * - changeType
 * - resourceUrl
 */
class CommsNotificationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CommsNotification
     */
    public const FIELD_CHANGE_TYPE = 'changeType';
    public const FIELD_RESOURCE_URL = 'resourceUrl';

    /**
     * Select specific CommsNotification properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
