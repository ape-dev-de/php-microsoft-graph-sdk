<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LocalizedNotificationMessage resources
 *
 * Available select fields:
 */
class LocalizedNotificationMessageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LocalizedNotificationMessage
     */

    /**
     * Select specific LocalizedNotificationMessage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
