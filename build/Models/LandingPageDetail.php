<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LandingPageDetail
 */
class LandingPageDetail
{
    /**
     * Landing page detail content.
     */
    private ?string $content;

    /**
     * Indicates whether this language detail is default for the landing page.
     */
    private ?bool $isDefaultLangauge;

    /**
     * The content language for the landing page.
     */
    private ?string $language;


    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getIsDefaultLangauge(): ?bool
    {
        return $this->isDefaultLangauge;
    }

    public function setIsDefaultLangauge(?bool $isDefaultLangauge): self
    {
        $this->isDefaultLangauge = $isDefaultLangauge;
        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;
        return $this;
    }

}
