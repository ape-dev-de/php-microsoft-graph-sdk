<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileSystemInfo
 */
class FileSystemInfo
{
    /** The UTC date and time the file was created on a client. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The UTC date and time the file was last accessed. Available for the recent file list only. */
    public ?\DateTimeInterface $lastAccessedDateTime = null;

    /** The UTC date and time the file was last modified on a client. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['lastAccessedDateTime'])) {
            $this->lastAccessedDateTime = $data['lastAccessedDateTime'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
    }
}
