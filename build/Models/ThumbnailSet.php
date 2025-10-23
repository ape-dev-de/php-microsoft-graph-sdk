<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ThumbnailSet
 */
class ThumbnailSet
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * A 1920x1920 scaled thumbnail.
     * @var Thumbnail|\stdClass|null
     */
    public mixed $large = null;

    /** 
     * A 176x176 scaled thumbnail.
     * @var Thumbnail|\stdClass|null
     */
    public mixed $medium = null;

    /** 
     * A 48x48 cropped thumbnail.
     * @var Thumbnail|\stdClass|null
     */
    public mixed $small = null;

    /** 
     * A custom thumbnail image or the original image used to generate other thumbnails.
     * @var Thumbnail|\stdClass|null
     */
    public mixed $source = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['large'])) {
            $this->large = $data['large'];
        }
        if (isset($data['medium'])) {
            $this->medium = $data['medium'];
        }
        if (isset($data['small'])) {
            $this->small = $data['small'];
        }
        if (isset($data['source'])) {
            $this->source = $data['source'];
        }
    }
}
