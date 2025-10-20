<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TermsAndConditions resources
 *
 * Available select fields:
 * - acceptanceStatement
 * - bodyText
 * - createdDateTime
 * - description
 * - displayName
 * - lastModifiedDateTime
 * - title
 * - version
 * - acceptanceStatuses
 * - assignments
 */
class TermsAndConditionsQueryOptions extends QueryOptions
{
    public const FIELD_ACCEPTANCE_STATEMENT = 'acceptanceStatement';
    public const FIELD_BODY_TEXT = 'bodyText';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_TITLE = 'title';
    public const FIELD_VERSION = 'version';
    public const FIELD_ACCEPTANCE_STATUSES = 'acceptanceStatuses';
    public const FIELD_ASSIGNMENTS = 'assignments';

    /**
     * Select specific TermsAndConditions properties
     * 
     * @param array<string> $select Use TermsAndConditionsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
