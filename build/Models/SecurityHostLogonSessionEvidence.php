<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostLogonSessionEvidence
 */
class SecurityHostLogonSessionEvidence
{
    /**
     */
    private ?string $account;

    /**
     */
    private ?\DateTimeInterface $endUtcDateTime;

    /**
     */
    private ?string $host;

    /**
     */
    private ?string $sessionId;

    /**
     */
    private ?\DateTimeInterface $startUtcDateTime;

    public function getAccount(): ?string
    {
        return $this->account;
    }

    public function setAccount(?string $account): self
    {
        $this->account = $account;
        return $this;
    }

    public function getEndUtcDateTime(): ?\DateTimeInterface
    {
        return $this->endUtcDateTime;
    }

    public function setEndUtcDateTime(?\DateTimeInterface $endUtcDateTime): self
    {
        $this->endUtcDateTime = $endUtcDateTime;
        return $this;
    }

    public function getHost(): ?string
    {
        return $this->host;
    }

    public function setHost(?string $host): self
    {
        $this->host = $host;
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

    public function getStartUtcDateTime(): ?\DateTimeInterface
    {
        return $this->startUtcDateTime;
    }

    public function setStartUtcDateTime(?\DateTimeInterface $startUtcDateTime): self
    {
        $this->startUtcDateTime = $startUtcDateTime;
        return $this;
    }

}
