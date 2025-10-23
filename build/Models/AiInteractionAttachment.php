<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteractionAttachment
 */
class AiInteractionAttachment
{
    /**  */
    public ?string $attachmentId = null;

    /**  */
    public ?string $content = null;

    /**  */
    public ?string $contentType = null;

    /**  */
    public ?string $contentUrl = null;

    /**  */
    public ?string $name = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['attachmentId'])) {
            $this->attachmentId = $data['attachmentId'];
        }
        if (isset($data['content'])) {
            $this->content = $data['content'];
        }
        if (isset($data['contentType'])) {
            $this->contentType = $data['contentType'];
        }
        if (isset($data['contentUrl'])) {
            $this->contentUrl = $data['contentUrl'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
    }
}
