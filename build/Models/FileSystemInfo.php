<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileSystemInfo
 */
class FileSystemInfo
{
    public function __construct(
        /** The UTC date and time the file was created on a client. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The UTC date and time the file was last accessed. Available for the recent file list only. */
        public ?\DateTimeInterface $lastAccessedDateTime = null,
        /** The UTC date and time the file was last modified on a client. */
        public ?\DateTimeInterface $lastModifiedDateTime = null
    ) {}
}
