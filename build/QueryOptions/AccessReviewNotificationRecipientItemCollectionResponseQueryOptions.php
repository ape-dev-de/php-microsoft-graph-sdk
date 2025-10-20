<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewNotificationRecipientItemCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessReviewNotificationRecipientItemCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessReviewNotificationRecipientItemCollectionResponse properties
     * 
     * @param array<string> $select Use AccessReviewNotificationRecipientItemCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
