<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ImageInfo
 */
class ImageInfo
{
    /** Optional; parameter used to indicate the server is able to render image dynamically in response to parameterization. For example – a high contrast image */
    public ?bool $addImageQuery = null;

    /** Optional; alt-text accessible content for the image */
    public ?string $alternateText = null;

    /**  */
    public ?string $alternativeText = null;

    /** Optional; URI that points to an icon which represents the application used to generate the activity */
    public ?string $iconUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['addImageQuery'])) {
            $this->addImageQuery = $data['addImageQuery'];
        }
        if (isset($data['alternateText'])) {
            $this->alternateText = $data['alternateText'];
        }
        if (isset($data['alternativeText'])) {
            $this->alternativeText = $data['alternativeText'];
        }
        if (isset($data['iconUrl'])) {
            $this->iconUrl = $data['iconUrl'];
        }
    }
}
