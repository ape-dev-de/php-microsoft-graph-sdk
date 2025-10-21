<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostPair
 */
class SecurityHostPair
{
    /**
     * The date and time when Microsoft Defender Threat Intelligence first observed the hostPair. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $firstSeenDateTime;

    /**
     * The date and time when Microsoft Defender Threat Intelligence last observed the hostPair. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastSeenDateTime;

    /**
     * The reason that two hosts are identified as hostPair.
     */
    private ?string $linkKind;

    /**
     */
    private ?string $childHost;

    /**
     */
    private ?string $parentHost;


    public function getFirstSeenDateTime(): ?\DateTimeInterface
    {
        return $this->firstSeenDateTime;
    }

    public function setFirstSeenDateTime(?\DateTimeInterface $firstSeenDateTime): self
    {
        $this->firstSeenDateTime = $firstSeenDateTime;
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

    public function getLinkKind(): ?string
    {
        return $this->linkKind;
    }

    public function setLinkKind(?string $linkKind): self
    {
        $this->linkKind = $linkKind;
        return $this;
    }

    public function getChildHost(): ?string
    {
        return $this->childHost;
    }

    public function setChildHost(?string $childHost): self
    {
        $this->childHost = $childHost;
        return $this;
    }

    public function getParentHost(): ?string
    {
        return $this->parentHost;
    }

    public function setParentHost(?string $parentHost): self
    {
        $this->parentHost = $parentHost;
        return $this;
    }

}
