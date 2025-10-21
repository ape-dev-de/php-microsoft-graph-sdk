<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LandingPage
 */
class LandingPage
{
    /**
     * Identity of the user who created the landing page.
     */
    private ?string $createdBy;

    /**
     * Date and time when the landing page was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Description of the landing page as defined by the user.
     */
    private ?string $description;

    /**
     * The display name of the landing page.
     */
    private ?string $displayName;

    /**
     * Email identity of the user who last modified the landing page.
     */
    private ?string $lastModifiedBy;

    /**
     * Date and time when the landing page was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Content locale.
     */
    private ?string $locale;

    /**
     * The source of the content. Possible values are: unknown, global, tenant, unknownFutureValue.
     */
    private ?string $source;

    /**
     * The status of the simulation. Possible values are: unknown, draft, ready, archive, delete, unknownFutureValue.
     */
    private ?string $status;

    /**
     * Supported locales.
     * @var string[]
     */
    private array $supportedLocales = [];

    /**
     * The detail information for a landing page associated with a simulation during its creation.
     * @var string[]
     */
    private array $details = [];


    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(?string $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
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

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSupportedLocales(): array
    {
        return $this->supportedLocales;
    }

    /**
     * @param string[] $supportedLocales
     */
    public function setSupportedLocales(array $supportedLocales): self
    {
        $this->supportedLocales = $supportedLocales;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getDetails(): array
    {
        return $this->details;
    }

    /**
     * @param string[] $details
     */
    public function setDetails(array $details): self
    {
        $this->details = $details;
        return $this;
    }

}
