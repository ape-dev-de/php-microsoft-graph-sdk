<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchAnswerVariant resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - languageTag
 * - platform
 * - webUrl
 */
class SearchAnswerVariantQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LANGUAGE_TAG = 'languageTag';
    public const FIELD_PLATFORM = 'platform';
    public const FIELD_WEB_URL = 'webUrl';

    /**
     * Select specific SearchAnswerVariant properties
     * 
     * @param array<string> $select Use SearchAnswerVariantQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
