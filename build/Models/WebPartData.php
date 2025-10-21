<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WebPartData
 */
class WebPartData
{
    public function __construct(
        /** Data version of the web part. The value is defined by the web part developer. Different dataVersions usually refers to a different property structure. */
        public ?string $dataVersion = null,
        /** Description of the web part. */
        public ?string $description = null,
        /** Properties bag of the web part. */
        public ?string $properties = null,
        /** Contains collections of data that can be processed by server side services like search index and link fixup. */
        public ?string $serverProcessedContent = null,
        /** Title of the web part. */
        public ?string $title = null
    ) {}
}
