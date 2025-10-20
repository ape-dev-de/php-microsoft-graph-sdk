<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewNotificationRecipientQueryScope resources
 *
 * Available select fields:
 * - query
 * - queryRoot
 * - queryType
 */
class AccessReviewNotificationRecipientQueryScopeQueryOptions extends QueryOptions
{
    public const FIELD_QUERY = 'query';
    public const FIELD_QUERY_ROOT = 'queryRoot';
    public const FIELD_QUERY_TYPE = 'queryType';

    /**
     * Select specific AccessReviewNotificationRecipientQueryScope properties
     * 
     * @param array<string> $select Use AccessReviewNotificationRecipientQueryScopeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
