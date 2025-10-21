<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchSearchAnswer resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - webUrl
 */
class SearchSearchAnswerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SearchSearchAnswer
     */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_WEB_URL = 'webUrl';

    /**
     * Select specific SearchSearchAnswer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
