<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostPortComponent
 */
class SecurityHostPortComponent
{
    /**
     * The first date and time when Microsoft Defender Threat Intelligence observed the hostPortComponent. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $firstSeenDateTime;

    /**
     * Indicates whether this hostPortComponent is recent, which is determined by whether the hostPortComponent was observed either at the same time or after the latest hostPortBanner in the scan history, or within two days of the latest scan of the hostPort when there are no hostPortBanners in the scan history.
     */
    private ?bool $isRecent;

    /**
     * The last date and time when Microsoft Defender Threat Intelligence observed the hostPortComponent. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastSeenDateTime;

    /**
     */
    private ?string $component;

    public function getFirstSeenDateTime(): ?\DateTimeInterface
    {
        return $this->firstSeenDateTime;
    }

    public function setFirstSeenDateTime(?\DateTimeInterface $firstSeenDateTime): self
    {
        $this->firstSeenDateTime = $firstSeenDateTime;
        return $this;
    }

    public function getIsRecent(): ?bool
    {
        return $this->isRecent;
    }

    public function setIsRecent(?bool $isRecent): self
    {
        $this->isRecent = $isRecent;
        return $this;
    }

    public function getLastSeenDateTime(): ?\DateTimeInterface
    {
        return $this->lastSeenDateTime;
    }

    public function setLastSeenDateTime(?\DateTimeInterface $lastSeenDateTime): self
    {
        $this->lastSeenDateTime = $lastSeenDateTime;
        return $this;
    }

    public function getComponent(): ?string
    {
        return $this->component;
    }

    public function setComponent(?string $component): self
    {
        $this->component = $component;
        return $this;
    }

}
