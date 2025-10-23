<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookCommentReply
 */
class WorkbookCommentReply
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The content of the reply. */
    public ?string $content = null;

    /** The content type for the reply. */
    public ?string $contentType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['content'])) {
            $this->content = $data['content'];
        }
        if (isset($data['contentType'])) {
            $this->contentType = $data['contentType'];
        }
    }
}
