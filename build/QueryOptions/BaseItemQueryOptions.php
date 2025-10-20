<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BaseItem resources
 *
 * Available select fields:
 * - createdBy
 * - createdDateTime
 * - description
 * - eTag
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - name
 * - parentReference
 * - webUrl
 * - createdByUser
 * - lastModifiedByUser
 */
class BaseItemQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_E_TAG = 'eTag';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_NAME = 'name';
    public const FIELD_PARENT_REFERENCE = 'parentReference';
    public const FIELD_WEB_URL = 'webUrl';
    public const FIELD_CREATED_BY_USER = 'createdByUser';
    public const FIELD_LAST_MODIFIED_BY_USER = 'lastModifiedByUser';

    /**
     * Select specific BaseItem properties
     * 
     * @param array<string> $select Use BaseItemQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
