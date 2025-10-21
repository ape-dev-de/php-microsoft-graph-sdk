<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnenotePage
 */
class OnenotePage
{
    /**
     * The page's HTML content.
     */
    private ?string $content;

    /**
     * The URL for the page's HTML content.  Read-only.
     */
    private ?string $contentUrl;

    /**
     * The unique identifier of the application that created the page. Read-only.
     */
    private ?string $createdByAppId;

    /**
     * The date and time when the page was last modified. The timestamp represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The indentation level of the page. Read-only.
     */
    private ?float $level;

    /**
     * Links for opening the page. The oneNoteClientURL link opens the page in the OneNote native client if it 's installed. The oneNoteWebUrl link opens the page in OneNote on the web. Read-only.
     */
    private ?string $links;

    /**
     * The order of the page within its parent section. Read-only.
     */
    private ?float $order;

    /**
     * The title of the page.
     */
    private ?string $title;

    /**
     * @var string[]
     */
    private array $userTags = [];

    /**
     * The notebook that contains the page.  Read-only.
     */
    private ?string $parentNotebook;

    /**
     * The section that contains the page. Read-only.
     */
    private ?string $parentSection;


    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getContentUrl(): ?string
    {
        return $this->contentUrl;
    }

    public function setContentUrl(?string $contentUrl): self
    {
        $this->contentUrl = $contentUrl;
        return $this;
    }

    public function getCreatedByAppId(): ?string
    {
        return $this->createdByAppId;
    }

    public function setCreatedByAppId(?string $createdByAppId): self
    {
        $this->createdByAppId = $createdByAppId;
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

    public function getLevel(): ?float
    {
        return $this->level;
    }

    public function setLevel(?float $level): self
    {
        $this->level = $level;
        return $this;
    }

    public function getLinks(): ?string
    {
        return $this->links;
    }

    public function setLinks(?string $links): self
    {
        $this->links = $links;
        return $this;
    }

    public function getOrder(): ?float
    {
        return $this->order;
    }

    public function setOrder(?float $order): self
    {
        $this->order = $order;
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

    /**
     * @return string[]
     */
    public function getUserTags(): array
    {
        return $this->userTags;
    }

    /**
     * @param string[] $userTags
     */
    public function setUserTags(array $userTags): self
    {
        $this->userTags = $userTags;
        return $this;
    }

    public function getParentNotebook(): ?string
    {
        return $this->parentNotebook;
    }

    public function setParentNotebook(?string $parentNotebook): self
    {
        $this->parentNotebook = $parentNotebook;
        return $this;
    }

    public function getParentSection(): ?string
    {
        return $this->parentSection;
    }

    public function setParentSection(?string $parentSection): self
    {
        $this->parentSection = $parentSection;
        return $this;
    }

}
