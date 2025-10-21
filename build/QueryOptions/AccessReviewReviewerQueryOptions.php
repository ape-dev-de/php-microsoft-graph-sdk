<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewReviewer resources
 *
 * Available select fields:
 * - createdDateTime
 * - displayName
 * - userPrincipalName
 */
class AccessReviewReviewerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewReviewer
     */
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific AccessReviewReviewer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
