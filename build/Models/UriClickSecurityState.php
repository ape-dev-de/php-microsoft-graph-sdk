<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UriClickSecurityState
 */
class UriClickSecurityState
{
    /**
     */
    private ?string $clickAction;

    /**
     */
    private ?\DateTimeInterface $clickDateTime;

    /**
     */
    private ?string $id;

    /**
     */
    private ?string $sourceId;

    /**
     */
    private ?string $uriDomain;

    /**
     */
    private ?string $verdict;

    public function getClickAction(): ?string
    {
        return $this->clickAction;
    }

    public function setClickAction(?string $clickAction): self
    {
        $this->clickAction = $clickAction;
        return $this;
    }

    public function getClickDateTime(): ?\DateTimeInterface
    {
        return $this->clickDateTime;
    }

    public function setClickDateTime(?\DateTimeInterface $clickDateTime): self
    {
        $this->clickDateTime = $clickDateTime;
        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getSourceId(): ?string
    {
        return $this->sourceId;
    }

    public function setSourceId(?string $sourceId): self
    {
        $this->sourceId = $sourceId;
        return $this;
    }

    public function getUriDomain(): ?string
    {
        return $this->uriDomain;
    }

    public function setUriDomain(?string $uriDomain): self
    {
        $this->uriDomain = $uriDomain;
        return $this;
    }

    public function getVerdict(): ?string
    {
        return $this->verdict;
    }

    public function setVerdict(?string $verdict): self
    {
        $this->verdict = $verdict;
        return $this;
    }

}
