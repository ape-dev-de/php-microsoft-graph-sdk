<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LearningContent resources
 *
 * Available select fields:
 * - additionalTags
 * - contentWebUrl
 * - contributors
 * - createdDateTime
 * - description
 * - duration
 * - externalId
 * - format
 * - isActive
 * - isPremium
 * - isSearchable
 * - languageTag
 * - lastModifiedDateTime
 * - level
 * - numberOfPages
 * - skillTags
 * - sourceName
 * - thumbnailWebUrl
 * - title
 */
class LearningContentQueryOptions extends QueryOptions
{
    public const FIELD_ADDITIONAL_TAGS = 'additionalTags';
    public const FIELD_CONTENT_WEB_URL = 'contentWebUrl';
    public const FIELD_CONTRIBUTORS = 'contributors';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DURATION = 'duration';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_FORMAT = 'format';
    public const FIELD_IS_ACTIVE = 'isActive';
    public const FIELD_IS_PREMIUM = 'isPremium';
    public const FIELD_IS_SEARCHABLE = 'isSearchable';
    public const FIELD_LANGUAGE_TAG = 'languageTag';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_LEVEL = 'level';
    public const FIELD_NUMBER_OF_PAGES = 'numberOfPages';
    public const FIELD_SKILL_TAGS = 'skillTags';
    public const FIELD_SOURCE_NAME = 'sourceName';
    public const FIELD_THUMBNAIL_WEB_URL = 'thumbnailWebUrl';
    public const FIELD_TITLE = 'title';

    /**
     * Select specific LearningContent properties
     * 
     * @param array<string> $select Use LearningContentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
