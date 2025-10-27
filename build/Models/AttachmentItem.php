<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttachmentItem
 */
class AttachmentItem
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The type of attachment. Possible values are: file, item, reference. Required.
     * @var AttachmentType|\stdClass|null
     */
    public AttachmentType|\stdClass|null $attachmentType = null;

    /** The CID or Content-Id of the attachment for referencing for the in-line attachments using the <img src='cid:contentId'> tag in HTML messages. Optional. */
    public ?string $contentId = null;

    /** The nature of the data in the attachment. Optional. */
    public ?string $contentType = null;

    /** true if the attachment is an inline attachment; otherwise, false. Optional. */
    public ?bool $isInline = null;

    /** The display name of the attachment. This can be a descriptive string and doesn't have to be the actual file name. Required. */
    public ?string $name = null;

    /** The length of the attachment in bytes. Required. */
    public ?float $size = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['attachmentType'])) {
            $this->attachmentType = is_string($data['attachmentType']) ? AttachmentType::tryFrom($data['attachmentType']) : $data['attachmentType'];
        }
        if (isset($data['contentId'])) {
            $this->contentId = $data['contentId'];
        }
        if (isset($data['contentType'])) {
            $this->contentType = $data['contentType'];
        }
        if (isset($data['isInline'])) {
            $this->isInline = is_bool($data['isInline']) ? $data['isInline'] : (bool)$data['isInline'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['size'])) {
            $this->size = is_numeric($data['size']) ? (float)$data['size'] : $data['size'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
