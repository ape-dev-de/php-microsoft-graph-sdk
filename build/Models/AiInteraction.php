<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteraction
 */
class AiInteraction
{
    /**
     */
    private ?string $appClass;

    /**
     */
    private array $attachments = [];

    /**
     */
    private ?string $body;

    /**
     */
    private array $contexts = [];

    /**
     */
    private ?string $conversationType;

    /**
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     */
    private ?string $etag;

    /**
     */
    private ?string $from;

    /**
     */
    private ?string $interactionType;

    /**
     */
    private array $links = [];

    /**
     */
    private ?string $locale;

    /**
     */
    private array $mentions = [];

    /**
     */
    private ?string $requestId;

    /**
     */
    private ?string $sessionId;


    public function getAppClass(): ?string
    {
        return $this->appClass;
    }

    public function setAppClass(?string $appClass): self
    {
        $this->appClass = $appClass;
        return $this;
    }

    public function getAttachments(): array
    {
        return $this->attachments;
    }

    public function setAttachments(array $attachments): self
    {
        $this->attachments = $attachments;
        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(?string $body): self
    {
        $this->body = $body;
        return $this;
    }

    public function getContexts(): array
    {
        return $this->contexts;
    }

    public function setContexts(array $contexts): self
    {
        $this->contexts = $contexts;
        return $this;
    }

    public function getConversationType(): ?string
    {
        return $this->conversationType;
    }

    public function setConversationType(?string $conversationType): self
    {
        $this->conversationType = $conversationType;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getEtag(): ?string
    {
        return $this->etag;
    }

    public function setEtag(?string $etag): self
    {
        $this->etag = $etag;
        return $this;
    }

    public function getFrom(): ?string
    {
        return $this->from;
    }

    public function setFrom(?string $from): self
    {
        $this->from = $from;
        return $this;
    }

    public function getInteractionType(): ?string
    {
        return $this->interactionType;
    }

    public function setInteractionType(?string $interactionType): self
    {
        $this->interactionType = $interactionType;
        return $this;
    }

    public function getLinks(): array
    {
        return $this->links;
    }

    public function setLinks(array $links): self
    {
        $this->links = $links;
        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;
        return $this;
    }

    public function getMentions(): array
    {
        return $this->mentions;
    }

    public function setMentions(array $mentions): self
    {
        $this->mentions = $mentions;
        return $this;
    }

    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    public function setRequestId(?string $requestId): self
    {
        $this->requestId = $requestId;
        return $this;
    }

    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }

    public function setSessionId(?string $sessionId): self
    {
        $this->sessionId = $sessionId;
        return $this;
    }

}
