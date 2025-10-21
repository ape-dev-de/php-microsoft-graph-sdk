<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LoginPage resources
 *
 * Available select fields:
 * - content
 * - createdBy
 * - createdDateTime
 * - description
 * - displayName
 * - language
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - source
 * - status
 */
class LoginPageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LoginPage
     */
    public const FIELD_CONTENT = 'content';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LANGUAGE = 'language';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_SOURCE = 'source';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific LoginPage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
