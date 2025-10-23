<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Thumbnail
 */
class Thumbnail
{
    /** The content stream for the thumbnail. */
    public ?string $content = null;

    /** The height of the thumbnail, in pixels. */
    public ?float $height = null;

    /** The unique identifier of the item that provided the thumbnail. This is only available when a folder thumbnail is requested. */
    public ?string $sourceItemId = null;

    /** The URL used to fetch the thumbnail content. */
    public ?string $url = null;

    /** The width of the thumbnail, in pixels. */
    public ?float $width = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['content'])) {
            $this->content = $data['content'];
        }
        if (isset($data['height'])) {
            $this->height = $data['height'];
        }
        if (isset($data['sourceItemId'])) {
            $this->sourceItemId = $data['sourceItemId'];
        }
        if (isset($data['url'])) {
            $this->url = $data['url'];
        }
        if (isset($data['width'])) {
            $this->width = $data['width'];
        }
    }
}
