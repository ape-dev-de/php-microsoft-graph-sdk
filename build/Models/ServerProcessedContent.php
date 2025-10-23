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
     * @var MetaDataKeyStringPair[]
     */
    public array $htmlStrings = [];

    /** 
     * A key-value map where keys are string identifiers and values are image sources. SharePoint servers treat the values as image sources and run services like search index and link fixup on them.
     * @var MetaDataKeyStringPair[]
     */
    public array $imageSources = [];

    /** 
     * A key-value map where keys are string identifiers and values are links. SharePoint servers treat the values as links and run services like link fixup on them.
     * @var MetaDataKeyStringPair[]
     */
    public array $links = [];

    /** 
     * A key-value map where keys are string identifiers and values are strings that should be search indexed.
     * @var MetaDataKeyStringPair[]
     */
    public array $searchablePlainTexts = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['htmlStrings'])) {
            $this->htmlStrings = $data['htmlStrings'];
        }
        if (isset($data['imageSources'])) {
            $this->imageSources = $data['imageSources'];
        }
        if (isset($data['links'])) {
            $this->links = $data['links'];
        }
        if (isset($data['searchablePlainTexts'])) {
            $this->searchablePlainTexts = $data['searchablePlainTexts'];
        }
    }
}
