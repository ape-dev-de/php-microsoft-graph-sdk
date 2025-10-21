<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for NotificationMessageTemplate resources
 *
 * Available select fields:
 */
class NotificationMessageTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for NotificationMessageTemplate
     */

    /**
     * Select specific NotificationMessageTemplate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
