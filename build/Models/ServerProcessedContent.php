<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServerProcessedContent
 */
class ServerProcessedContent
{
    /**
     * A key-value map where keys are string identifiers and values are rich text with HTML format. SharePoint servers treat the values as HTML content and run services like safety checks, search index and link fixup on them.
     */
    private array $htmlStrings = [];

    /**
     * A key-value map where keys are string identifiers and values are image sources. SharePoint servers treat the values as image sources and run services like search index and link fixup on them.
     */
    private array $imageSources = [];

    /**
     * A key-value map where keys are string identifiers and values are links. SharePoint servers treat the values as links and run services like link fixup on them.
     */
    private array $links = [];

    /**
     * A key-value map where keys are string identifiers and values are strings that should be search indexed.
     * @var string[]
     */
    private array $searchablePlainTexts = [];


    public function getHtmlStrings(): array
    {
        return $this->htmlStrings;
    }

    public function setHtmlStrings(array $htmlStrings): self
    {
        $this->htmlStrings = $htmlStrings;
        return $this;
    }

    public function getImageSources(): array
    {
        return $this->imageSources;
    }

    public function setImageSources(array $imageSources): self
    {
        $this->imageSources = $imageSources;
        return $this;
    }

    public function getLinks(): array
    {
        return $this->links;
    }

    public function setLinks(array $links): self
    {
        $this->links = $links;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSearchablePlainTexts(): array
    {
        return $this->searchablePlainTexts;
    }

    /**
     * @param string[] $searchablePlainTexts
     */
    public function setSearchablePlainTexts(array $searchablePlainTexts): self
    {
        $this->searchablePlainTexts = $searchablePlainTexts;
        return $this;
    }

}
