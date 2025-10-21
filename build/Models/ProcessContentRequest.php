<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessContentRequest
 */
class ProcessContentRequest
{
    public function __construct(
        /**  */
        public ?string $activityMetadata = null,
        /** A collection of content entries to be processed. Each entry contains the content itself and its metadata. Use conversation metadata for content like prompts and responses and file metadata for files. Required. */
        public array $contentEntries = [],
        /**  */
        public ?string $deviceMetadata = null,
        /**  */
        public ?string $integratedAppMetadata = null,
        /** Metadata about the protected application making the request. Required. */
        public ?string $protectedAppMetadata = null
    ) {}
}
