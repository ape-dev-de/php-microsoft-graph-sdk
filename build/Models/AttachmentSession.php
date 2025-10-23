<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttachmentSession
 */
class AttachmentSession
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The content streams that are uploaded. */
    public ?string $content = null;

    /** The date and time in UTC when the upload session will expire. The complete file must be uploaded before this expiration time is reached. */
    public ?\DateTimeInterface $expirationDateTime = null;

    /** 
     * Indicates a single value {start} that represents the location in the file where the next upload should begin.
     * @var string[]
     */
    public array $nextExpectedRanges = [];


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
        if (isset($data['expirationDateTime'])) {
            $this->expirationDateTime = $data['expirationDateTime'];
        }
        if (isset($data['nextExpectedRanges'])) {
            $this->nextExpectedRanges = $data['nextExpectedRanges'];
        }
    }
}
