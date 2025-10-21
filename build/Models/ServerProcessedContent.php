<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServerProcessedContent
 */
class ServerProcessedContent
{
    public function __construct(
        /** A key-value map where keys are string identifiers and values are rich text with HTML format. SharePoint servers treat the values as HTML content and run services like safety checks, search index and link fixup on them. */
        public array $htmlStrings = [],
        /** A key-value map where keys are string identifiers and values are image sources. SharePoint servers treat the values as image sources and run services like search index and link fixup on them. */
        public array $imageSources = [],
        /** A key-value map where keys are string identifiers and values are links. SharePoint servers treat the values as links and run services like link fixup on them. */
        public array $links = [],
        /** @var string[] A key-value map where keys are string identifiers and values are strings that should be search indexed. */
        public array $searchablePlainTexts = []
    ) {}
}
