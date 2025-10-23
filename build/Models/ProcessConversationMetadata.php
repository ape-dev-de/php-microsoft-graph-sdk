<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessConversationMetadata
 */
class ProcessConversationMetadata
{
    /** 
     * Represents the actual content, either as text (textContent) or binary data (binaryContent). Optional if metadata alone is sufficient for policy evaluation. Do not use for contentActivities.
     * @var ContentBase|\stdClass|null
     */
    public mixed $content = null;

    /** An identifier used to group multiple related content entries (for example, different parts of the same file upload, messages in a conversation). */
    public ?string $correlationId = null;

    /** Required. Timestamp indicating when the original content was created (for example, file creation time, message sent time). */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Required. A unique identifier for this specific content entry within the context of the calling application or enforcement plane (for example, message ID, file path/URL). */
    public ?string $identifier = null;

    /** Required. Indicates if the provided content has been truncated from its original form (for example, due to size limits). */
    public ?bool $isTruncated = null;

    /** The length of the original content in bytes. */
    public ?float $length = null;

    /** Required. Timestamp indicating when the original content was last modified. For ephemeral content like messages, this might be the same as createdDateTime. */
    public ?\DateTimeInterface $modifiedDateTime = null;

    /** Required. A descriptive name for the content (for example, file name, web page title, 'Chat Message'). */
    public ?string $name = null;

    /** A sequence number indicating the order in which content was generated or should be processed, required when correlationId is used. */
    public ?float $sequenceNumber = null;

    /** 
     * List of resources (for example, file URLs, web URLs) accessed during the generation of this message (relevant for bot interactions).
     * @var string[]
     */
    public array $accessedResources = [];

    /** Identifier of the parent message in a threaded conversation, if applicable. */
    public ?string $parentMessageId = null;

    /** 
     * List of plugins used during the generation of this message (relevant for AI/bot interactions).
     * @var AiInteractionPlugin[]
     */
    public array $plugins = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['content'])) {
            $this->content = is_array($data['content']) ? new ContentBase($data['content']) : $data['content'];
        }
        if (isset($data['correlationId'])) {
            $this->correlationId = $data['correlationId'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['identifier'])) {
            $this->identifier = $data['identifier'];
        }
        if (isset($data['isTruncated'])) {
            $this->isTruncated = $data['isTruncated'];
        }
        if (isset($data['length'])) {
            $this->length = $data['length'];
        }
        if (isset($data['modifiedDateTime'])) {
            $this->modifiedDateTime = is_string($data['modifiedDateTime']) ? new \DateTimeImmutable($data['modifiedDateTime']) : $data['modifiedDateTime'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['sequenceNumber'])) {
            $this->sequenceNumber = $data['sequenceNumber'];
        }
        if (isset($data['accessedResources'])) {
            $this->accessedResources = $data['accessedResources'];
        }
        if (isset($data['parentMessageId'])) {
            $this->parentMessageId = $data['parentMessageId'];
        }
        if (isset($data['plugins'])) {
            $this->plugins = $data['plugins'];
        }
    }
}
