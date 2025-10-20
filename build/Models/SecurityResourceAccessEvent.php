<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityResourceAccessEvent
 */
class SecurityResourceAccessEvent
{
    /**
     * The time of the access event.
     */
    private ?\DateTimeInterface $accessDateTime;

    /**
     * The identifier of the user account.
     */
    private ?string $accountId;

    /**
     * IP address of the resource.
     */
    private ?string $ipAddress;

    /**
     * The protocol and host name pairs describing the connection.
     */
    private ?string $resourceIdentifier;

    public function getAccessDateTime(): ?\DateTimeInterface
    {
        return $this->accessDateTime;
    }

    public function setAccessDateTime(?\DateTimeInterface $accessDateTime): self
    {
        $this->accessDateTime = $accessDateTime;
        return $this;
    }

    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    public function setAccountId(?string $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    public function getResourceIdentifier(): ?string
    {
        return $this->resourceIdentifier;
    }

    public function setResourceIdentifier(?string $resourceIdentifier): self
    {
        $this->resourceIdentifier = $resourceIdentifier;
        return $this;
    }

}
