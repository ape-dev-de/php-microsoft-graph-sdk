<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchBookmark resources
 *
 * Available select fields:
 * - availabilityEndDateTime
 * - availabilityStartDateTime
 * - categories
 * - groupIds
 * - isSuggested
 * - keywords
 * - languageTags
 * - platforms
 * - powerAppIds
 * - state
 * - targetedVariations
 */
class SearchBookmarkQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SearchBookmark
     */
    public const FIELD_AVAILABILITY_END_DATE_TIME = 'availabilityEndDateTime';
    public const FIELD_AVAILABILITY_START_DATE_TIME = 'availabilityStartDateTime';
    public const FIELD_CATEGORIES = 'categories';
    public const FIELD_GROUP_IDS = 'groupIds';
    public const FIELD_IS_SUGGESTED = 'isSuggested';
    public const FIELD_KEYWORDS = 'keywords';
    public const FIELD_LANGUAGE_TAGS = 'languageTags';
    public const FIELD_PLATFORMS = 'platforms';
    public const FIELD_POWER_APP_IDS = 'powerAppIds';
    public const FIELD_STATE = 'state';
    public const FIELD_TARGETED_VARIATIONS = 'targetedVariations';

    /**
     * Select specific SearchBookmark properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
