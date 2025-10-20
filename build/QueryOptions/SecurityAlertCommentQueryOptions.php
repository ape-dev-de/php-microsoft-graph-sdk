<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityAlertComment resources
 *
 * Available select fields:
 * - comment
 * - createdByDisplayName
 * - createdDateTime
 */
class SecurityAlertCommentQueryOptions extends QueryOptions
{
    public const FIELD_COMMENT = 'comment';
    public const FIELD_CREATED_BY_DISPLAY_NAME = 'createdByDisplayName';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';

    /**
     * Select specific SecurityAlertComment properties
     * 
     * @param array<string> $select Use SecurityAlertCommentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
