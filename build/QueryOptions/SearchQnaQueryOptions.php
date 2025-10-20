<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchQna resources
 *
 * Available select fields:
 * - availabilityEndDateTime
 * - availabilityStartDateTime
 * - groupIds
 * - isSuggested
 * - keywords
 * - languageTags
 * - platforms
 * - state
 * - targetedVariations
 */
class SearchQnaQueryOptions extends QueryOptions
{
    public const FIELD_AVAILABILITY_END_DATE_TIME = 'availabilityEndDateTime';
    public const FIELD_AVAILABILITY_START_DATE_TIME = 'availabilityStartDateTime';
    public const FIELD_GROUP_IDS = 'groupIds';
    public const FIELD_IS_SUGGESTED = 'isSuggested';
    public const FIELD_KEYWORDS = 'keywords';
    public const FIELD_LANGUAGE_TAGS = 'languageTags';
    public const FIELD_PLATFORMS = 'platforms';
    public const FIELD_STATE = 'state';
    public const FIELD_TARGETED_VARIATIONS = 'targetedVariations';

    /**
     * Select specific SearchQna properties
     * 
     * @param array<string> $select Use SearchQnaQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
