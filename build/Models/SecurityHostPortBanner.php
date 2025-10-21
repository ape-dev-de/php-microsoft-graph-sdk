<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostPortBanner
 */
class SecurityHostPortBanner
{
    /**
     * The text response received from a web component when scanning a hostPort.
     */
    private ?string $banner;

    /**
     * The first date and time when Microsoft Defender Threat Intelligence observed the hostPortBanner. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $firstSeenDateTime;

    /**
     * The last date and time when Microsoft Defender Threat Intelligence observed the hostPortBanner. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastSeenDateTime;

    /**
     * The specific protocol used to scan the hostPort.
     */
    private ?string $scanProtocol;

    /**
     * The total amount of times that Microsoft Defender Threat Intelligence has observed the hostPortBanner in all its scans.
     */
    private ?string $timesObserved;


    public function getBanner(): ?string
    {
        return $this->banner;
    }

    public function setBanner(?string $banner): self
    {
        $this->banner = $banner;
        return $this;
    }

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

    public function getScanProtocol(): ?string
    {
        return $this->scanProtocol;
    }

    public function setScanProtocol(?string $scanProtocol): self
    {
        $this->scanProtocol = $scanProtocol;
        return $this;
    }

    public function getTimesObserved(): ?string
    {
        return $this->timesObserved;
    }

    public function setTimesObserved(?string $timesObserved): self
    {
        $this->timesObserved = $timesObserved;
        return $this;
    }

}
