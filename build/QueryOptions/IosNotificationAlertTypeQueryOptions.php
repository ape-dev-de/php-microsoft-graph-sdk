<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosNotificationAlertType resources
 *
 * Available select fields:
 */
class IosNotificationAlertTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosNotificationAlertType
     */

    /**
     * Select specific IosNotificationAlertType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
