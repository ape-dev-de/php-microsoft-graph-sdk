<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServerProcessedContent resources
 *
 * Available select fields:
 * - htmlStrings
 * - imageSources
 * - links
 * - searchablePlainTexts
 */
class ServerProcessedContentQueryOptions extends QueryOptions
{
    public const FIELD_HTML_STRINGS = 'htmlStrings';
    public const FIELD_IMAGE_SOURCES = 'imageSources';
    public const FIELD_LINKS = 'links';
    public const FIELD_SEARCHABLE_PLAIN_TEXTS = 'searchablePlainTexts';

    /**
     * Select specific ServerProcessedContent properties
     * 
     * @param array<string> $select Use ServerProcessedContentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
