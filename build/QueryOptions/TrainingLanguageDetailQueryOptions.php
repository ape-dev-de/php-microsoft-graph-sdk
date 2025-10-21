<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TrainingLanguageDetail resources
 *
 * Available select fields:
 * - content
 * - createdBy
 * - createdDateTime
 * - description
 * - displayName
 * - isDefaultLangauge
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - locale
 */
class TrainingLanguageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TrainingLanguageDetail
     */
    public const FIELD_CONTENT = 'content';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_DEFAULT_LANGAUGE = 'isDefaultLangauge';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_LOCALE = 'locale';

    /**
     * Select specific TrainingLanguageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
