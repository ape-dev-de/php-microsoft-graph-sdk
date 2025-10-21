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
        public ?ActivityMetadata $activityMetadata = null,
        /** A collection of content entries to be processed. Each entry contains the content itself and its metadata. Use conversation metadata for content like prompts and responses and file metadata for files. Required. */
        public array $contentEntries = [],
        /**  */
        public ?DeviceMetadata $deviceMetadata = null,
        /**  */
        public ?IntegratedApplicationMetadata $integratedAppMetadata = null,
        /** Metadata about the protected application making the request. Required. */
        public ?ProtectedApplicationMetadata $protectedAppMetadata = null
    ) {}
}
