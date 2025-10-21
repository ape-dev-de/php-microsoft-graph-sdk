<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LandingPageDetail resources
 *
 * Available select fields:
 * - content
 * - isDefaultLangauge
 * - language
 */
class LandingPageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LandingPageDetail
     */
    public const FIELD_CONTENT = 'content';
    public const FIELD_IS_DEFAULT_LANGAUGE = 'isDefaultLangauge';
    public const FIELD_LANGUAGE = 'language';

    /**
     * Select specific LandingPageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
