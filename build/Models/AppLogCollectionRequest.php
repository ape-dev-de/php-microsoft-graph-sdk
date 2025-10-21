<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppLogCollectionRequest
 */
class AppLogCollectionRequest
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Time at which the upload log request reached a completed state if not completed yet NULL will be returned. */
        public ?\DateTimeInterface $completedDateTime = null,
        /** @var string[] List of log folders. */
        public array $customLogFolders = [],
        /** Indicates error message if any during the upload process. */
        public ?string $errorMessage = null,
        /** Entity for AppLogCollectionRequest contains all logs values. */
        public ?string $status = null
    ) {}
}
