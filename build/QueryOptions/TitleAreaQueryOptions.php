<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TitleArea resources
 *
 * Available select fields:
 * - alternativeText
 * - enableGradientEffect
 * - imageWebUrl
 * - layout
 * - serverProcessedContent
 * - showAuthor
 * - showPublishedDate
 * - showTextBlockAboveTitle
 * - textAboveTitle
 * - textAlignment
 */
class TitleAreaQueryOptions extends QueryOptions
{
    public const FIELD_ALTERNATIVE_TEXT = 'alternativeText';
    public const FIELD_ENABLE_GRADIENT_EFFECT = 'enableGradientEffect';
    public const FIELD_IMAGE_WEB_URL = 'imageWebUrl';
    public const FIELD_LAYOUT = 'layout';
    public const FIELD_SERVER_PROCESSED_CONTENT = 'serverProcessedContent';
    public const FIELD_SHOW_AUTHOR = 'showAuthor';
    public const FIELD_SHOW_PUBLISHED_DATE = 'showPublishedDate';
    public const FIELD_SHOW_TEXT_BLOCK_ABOVE_TITLE = 'showTextBlockAboveTitle';
    public const FIELD_TEXT_ABOVE_TITLE = 'textAboveTitle';
    public const FIELD_TEXT_ALIGNMENT = 'textAlignment';

    /**
     * Select specific TitleArea properties
     * 
     * @param array<string> $select Use TitleAreaQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
