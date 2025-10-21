<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIntelligenceProfile
 */
class SecurityIntelligenceProfile
{
    /**
     * A list of commonly-known aliases for the threat intelligence included in the intelligenceProfile.
     * @var string[]
     */
    private array $aliases = [];

    /**
     * The country/region of origin for the given actor or threat associated with this intelligenceProfile.
     */
    private array $countriesOrRegionsOfOrigin = [];

    /**
     */
    private ?string $description;

    /**
     * The date and time when this intelligenceProfile was first active. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $firstActiveDateTime;

    /**
     */
    private ?string $kind;

    /**
     */
    private ?string $summary;

    /**
     * Known targets related to this intelligenceProfile.
     * @var string[]
     */
    private array $targets = [];

    /**
     * The title of this intelligenceProfile.
     */
    private ?string $title;

    /**
     * Formatted information featuring a description of the distinctive tactics, techniques, and procedures (TTP) of the group, followed by a list of all known custom, commodity, and publicly available implants used by the group.
     */
    private ?string $tradecraft;

    /**
     * Includes an assemblage of high-fidelity network indicators of compromise.
     * @var string[]
     */
    private array $indicators = [];


    /**
     * @return string[]
     */
    public function getAliases(): array
    {
        return $this->aliases;
    }

    /**
     * @param string[] $aliases
     */
    public function setAliases(array $aliases): self
    {
        $this->aliases = $aliases;
        return $this;
    }

    public function getCountriesOrRegionsOfOrigin(): array
    {
        return $this->countriesOrRegionsOfOrigin;
    }

    public function setCountriesOrRegionsOfOrigin(array $countriesOrRegionsOfOrigin): self
    {
        $this->countriesOrRegionsOfOrigin = $countriesOrRegionsOfOrigin;
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

    public function getFirstActiveDateTime(): ?\DateTimeInterface
    {
        return $this->firstActiveDateTime;
    }

    public function setFirstActiveDateTime(?\DateTimeInterface $firstActiveDateTime): self
    {
        $this->firstActiveDateTime = $firstActiveDateTime;
        return $this;
    }

    public function getKind(): ?string
    {
        return $this->kind;
    }

    public function setKind(?string $kind): self
    {
        $this->kind = $kind;
        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): self
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTargets(): array
    {
        return $this->targets;
    }

    /**
     * @param string[] $targets
     */
    public function setTargets(array $targets): self
    {
        $this->targets = $targets;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getTradecraft(): ?string
    {
        return $this->tradecraft;
    }

    public function setTradecraft(?string $tradecraft): self
    {
        $this->tradecraft = $tradecraft;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getIndicators(): array
    {
        return $this->indicators;
    }

    /**
     * @param string[] $indicators
     */
    public function setIndicators(array $indicators): self
    {
        $this->indicators = $indicators;
        return $this;
    }

}
