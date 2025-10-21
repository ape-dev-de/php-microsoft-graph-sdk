<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsUpdateNotificationDisplayOption resources
 *
 * Available select fields:
 */
class WindowsUpdateNotificationDisplayOptionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsUpdateNotificationDisplayOption
     */

    /**
     * Select specific WindowsUpdateNotificationDisplayOption properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
