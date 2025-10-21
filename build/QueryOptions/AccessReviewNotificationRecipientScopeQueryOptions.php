<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewNotificationRecipientScope resources
 *
 * Available select fields:
 */
class AccessReviewNotificationRecipientScopeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewNotificationRecipientScope
     */

    /**
     * Select specific AccessReviewNotificationRecipientScope properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
