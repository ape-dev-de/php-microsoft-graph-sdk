<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResourceVisualization resources
 *
 * Available select fields:
 * - containerDisplayName
 * - containerType
 * - containerWebUrl
 * - mediaType
 * - previewImageUrl
 * - previewText
 * - title
 * - type
 */
class ResourceVisualizationQueryOptions extends QueryOptions
{
    public const FIELD_CONTAINER_DISPLAY_NAME = 'containerDisplayName';
    public const FIELD_CONTAINER_TYPE = 'containerType';
    public const FIELD_CONTAINER_WEB_URL = 'containerWebUrl';
    public const FIELD_MEDIA_TYPE = 'mediaType';
    public const FIELD_PREVIEW_IMAGE_URL = 'previewImageUrl';
    public const FIELD_PREVIEW_TEXT = 'previewText';
    public const FIELD_TITLE = 'title';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific ResourceVisualization properties
     * 
     * @param array<string> $select Use ResourceVisualizationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
