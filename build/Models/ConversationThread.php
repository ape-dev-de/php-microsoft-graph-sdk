<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConversationThread
 */
class ConversationThread
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The Cc: recipients for the thread. Returned only on $select.
     * @var Recipient[]
     */
    public array $ccRecipients = [];

    /** Indicates whether any of the posts within this thread has at least one attachment. Returned by default. */
    public ?bool $hasAttachments = null;

    /** Indicates if the thread is locked. Returned by default. */
    public ?bool $isLocked = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.Returned by default. */
    public ?\DateTimeInterface $lastDeliveredDateTime = null;

    /** A short summary from the body of the latest post in this conversation. Returned by default. */
    public ?string $preview = null;

    /** The topic of the conversation. This property can be set when the conversation is created, but it cannot be updated. Returned by default. */
    public ?string $topic = null;

    /** 
     * The To: recipients for the thread. Returned only on $select.
     * @var Recipient[]
     */
    public array $toRecipients = [];

    /** 
     * All the users that sent a message to this thread. Returned by default.
     * @var string[]
     */
    public array $uniqueSenders = [];

    /** 
     * 
     * @var Post[]
     */
    public array $posts = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['ccRecipients'])) {
            $this->ccRecipients = $data['ccRecipients'];
        }
        if (isset($data['hasAttachments'])) {
            $this->hasAttachments = $data['hasAttachments'];
        }
        if (isset($data['isLocked'])) {
            $this->isLocked = $data['isLocked'];
        }
        if (isset($data['lastDeliveredDateTime'])) {
            $this->lastDeliveredDateTime = $data['lastDeliveredDateTime'];
        }
        if (isset($data['preview'])) {
            $this->preview = $data['preview'];
        }
        if (isset($data['topic'])) {
            $this->topic = $data['topic'];
        }
        if (isset($data['toRecipients'])) {
            $this->toRecipients = $data['toRecipients'];
        }
        if (isset($data['uniqueSenders'])) {
            $this->uniqueSenders = $data['uniqueSenders'];
        }
        if (isset($data['posts'])) {
            $this->posts = $data['posts'];
        }
    }
}
