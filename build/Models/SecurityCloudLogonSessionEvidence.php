<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCloudLogonSessionEvidence
 */
class SecurityCloudLogonSessionEvidence
{
    /**
     * The account associated with the sign-in session.
     */
    private ?string $account;

    /**
     * The browser that is used for the sign-in, if known.
     */
    private ?string $browser;

    /**
     * The friendly name of the device, if known.
     */
    private ?string $deviceName;

    /**
     * The operating system that the device is running, if known.
     */
    private ?string $operatingSystem;

    /**
     * The previous sign-in time for this account, if known.
     */
    private ?\DateTimeInterface $previousLogonDateTime;

    /**
     * The authentication protocol that is used in this session, if known.
     */
    private ?string $protocol;

    /**
     * The session ID for the account reported in the alert.
     */
    private ?string $sessionId;

    /**
     * The session start time, if known.
     */
    private ?\DateTimeInterface $startUtcDateTime;

    /**
     * The user agent that is used for the sign-in, if known.
     */
    private ?string $userAgent;


    public function getAccount(): ?string
    {
        return $this->account;
    }

    public function setAccount(?string $account): self
    {
        $this->account = $account;
        return $this;
    }

    public function getBrowser(): ?string
    {
        return $this->browser;
    }

    public function setBrowser(?string $browser): self
    {
        $this->browser = $browser;
        return $this;
    }

    public function getDeviceName(): ?string
    {
        return $this->deviceName;
    }

    public function setDeviceName(?string $deviceName): self
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    public function getOperatingSystem(): ?string
    {
        return $this->operatingSystem;
    }

    public function setOperatingSystem(?string $operatingSystem): self
    {
        $this->operatingSystem = $operatingSystem;
        return $this;
    }

    public function getPreviousLogonDateTime(): ?\DateTimeInterface
    {
        return $this->previousLogonDateTime;
    }

    public function setPreviousLogonDateTime(?\DateTimeInterface $previousLogonDateTime): self
    {
        $this->previousLogonDateTime = $previousLogonDateTime;
        return $this;
    }

    public function getProtocol(): ?string
    {
        return $this->protocol;
    }

    public function setProtocol(?string $protocol): self
    {
        $this->protocol = $protocol;
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

    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    public function setUserAgent(?string $userAgent): self
    {
        $this->userAgent = $userAgent;
        return $this;
    }

}
