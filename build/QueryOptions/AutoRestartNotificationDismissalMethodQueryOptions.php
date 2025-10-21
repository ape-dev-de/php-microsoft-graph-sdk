<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AutoRestartNotificationDismissalMethod resources
 *
 * Available select fields:
 */
class AutoRestartNotificationDismissalMethodQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AutoRestartNotificationDismissalMethod
     */

    /**
     * Select specific AutoRestartNotificationDismissalMethod properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
