<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DocumentSet
 */
class DocumentSet
{
    /**
     * Content types allowed in document set.
     */
    private array $allowedContentTypes = [];

    /**
     * Default contents of document set.
     */
    private array $defaultContents = [];

    /**
     * Specifies whether to push welcome page changes to inherited content types.
     */
    private ?bool $propagateWelcomePageChanges;

    /**
     * Indicates whether to add the name of the document set to each file name.
     */
    private ?bool $shouldPrefixNameToFile;

    /**
     * Welcome page absolute URL.
     */
    private ?string $welcomePageUrl;

    /**
     */
    private array $sharedColumns = [];

    /**
     * @var string[]
     */
    private array $welcomePageColumns = [];


    public function getAllowedContentTypes(): array
    {
        return $this->allowedContentTypes;
    }

    public function setAllowedContentTypes(array $allowedContentTypes): self
    {
        $this->allowedContentTypes = $allowedContentTypes;
        return $this;
    }

    public function getDefaultContents(): array
    {
        return $this->defaultContents;
    }

    public function setDefaultContents(array $defaultContents): self
    {
        $this->defaultContents = $defaultContents;
        return $this;
    }

    public function getPropagateWelcomePageChanges(): ?bool
    {
        return $this->propagateWelcomePageChanges;
    }

    public function setPropagateWelcomePageChanges(?bool $propagateWelcomePageChanges): self
    {
        $this->propagateWelcomePageChanges = $propagateWelcomePageChanges;
        return $this;
    }

    public function getShouldPrefixNameToFile(): ?bool
    {
        return $this->shouldPrefixNameToFile;
    }

    public function setShouldPrefixNameToFile(?bool $shouldPrefixNameToFile): self
    {
        $this->shouldPrefixNameToFile = $shouldPrefixNameToFile;
        return $this;
    }

    public function getWelcomePageUrl(): ?string
    {
        return $this->welcomePageUrl;
    }

    public function setWelcomePageUrl(?string $welcomePageUrl): self
    {
        $this->welcomePageUrl = $welcomePageUrl;
        return $this;
    }

    public function getSharedColumns(): array
    {
        return $this->sharedColumns;
    }

    public function setSharedColumns(array $sharedColumns): self
    {
        $this->sharedColumns = $sharedColumns;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getWelcomePageColumns(): array
    {
        return $this->welcomePageColumns;
    }

    /**
     * @param string[] $welcomePageColumns
     */
    public function setWelcomePageColumns(array $welcomePageColumns): self
    {
        $this->welcomePageColumns = $welcomePageColumns;
        return $this;
    }

}
