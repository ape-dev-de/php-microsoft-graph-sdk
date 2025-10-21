<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchAnswerVariant
 */
class SearchAnswerVariant
{
    /**
     * The answer variation description that is shown on the search results page.
     */
    private ?string $description;

    /**
     * The answer variation name that is displayed in search results.
     */
    private ?string $displayName;

    /**
     * The country or region that can view this answer variation.
     */
    private ?string $languageTag;

    /**
     * The device or operating system that can view this answer variation. Possible values are: android, androidForWork, ios, macOS, windowsPhone81, windowsPhone81AndLater, windows10AndLater, androidWorkProfile, unknown, androidASOP, androidMobileApplicationManagement, iOSMobileApplicationManagement, unknownFutureValue.
     */
    private ?string $platform;

    /**
     * The URL link for the answer variation. When users select this answer variation from the search results, they''re directed to the specified URL.
     */
    private ?string $webUrl;


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

    public function getLanguageTag(): ?string
    {
        return $this->languageTag;
    }

    public function setLanguageTag(?string $languageTag): self
    {
        $this->languageTag = $languageTag;
        return $this;
    }

    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

}
