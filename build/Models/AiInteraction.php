<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteraction
 */
class AiInteraction
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?string $appClass = null;

    /** 
     * 
     * @var AiInteractionAttachment[]
     */
    public array $attachments = [];

    /** 
     * 
     * @var ItemBody|\stdClass|null
     */
    public mixed $body = null;

    /** 
     * 
     * @var AiInteractionContext[]
     */
    public array $contexts = [];

    /**  */
    public ?string $conversationType = null;

    /**  */
    public ?\DateTimeInterface $createdDateTime = null;

    /**  */
    public ?string $etag = null;

    /**  */
    public ?IdentitySet $from = null;

    /**  */
    public ?AiInteractionType $interactionType = null;

    /** 
     * 
     * @var AiInteractionLink[]
     */
    public array $links = [];

    /**  */
    public ?string $locale = null;

    /** 
     * 
     * @var AiInteractionMention[]
     */
    public array $mentions = [];

    /**  */
    public ?string $requestId = null;

    /**  */
    public ?string $sessionId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['appClass'])) {
            $this->appClass = $data['appClass'];
        }
        if (isset($data['attachments'])) {
            $this->attachments = $data['attachments'];
        }
        if (isset($data['body'])) {
            $this->body = $data['body'];
        }
        if (isset($data['contexts'])) {
            $this->contexts = $data['contexts'];
        }
        if (isset($data['conversationType'])) {
            $this->conversationType = $data['conversationType'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['etag'])) {
            $this->etag = $data['etag'];
        }
        if (isset($data['from'])) {
            $this->from = $data['from'];
        }
        if (isset($data['interactionType'])) {
            $this->interactionType = $data['interactionType'];
        }
        if (isset($data['links'])) {
            $this->links = $data['links'];
        }
        if (isset($data['locale'])) {
            $this->locale = $data['locale'];
        }
        if (isset($data['mentions'])) {
            $this->mentions = $data['mentions'];
        }
        if (isset($data['requestId'])) {
            $this->requestId = $data['requestId'];
        }
        if (isset($data['sessionId'])) {
            $this->sessionId = $data['sessionId'];
        }
    }
}
