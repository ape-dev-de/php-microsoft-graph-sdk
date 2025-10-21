<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewNotificationRecipientQueryScope resources
 *
 * Available select fields:
 */
class AccessReviewNotificationRecipientQueryScopeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewNotificationRecipientQueryScope
     */

    /**
     * Select specific AccessReviewNotificationRecipientQueryScope properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
