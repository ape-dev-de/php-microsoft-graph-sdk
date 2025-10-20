<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ImageInfo resources
 *
 * Available select fields:
 * - addImageQuery
 * - alternateText
 * - alternativeText
 * - iconUrl
 */
class ImageInfoQueryOptions extends QueryOptions
{
    public const FIELD_ADD_IMAGE_QUERY = 'addImageQuery';
    public const FIELD_ALTERNATE_TEXT = 'alternateText';
    public const FIELD_ALTERNATIVE_TEXT = 'alternativeText';
    public const FIELD_ICON_URL = 'iconUrl';

    /**
     * Select specific ImageInfo properties
     * 
     * @param array<string> $select Use ImageInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
