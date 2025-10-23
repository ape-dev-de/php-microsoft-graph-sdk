<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityReportFileMetadata
 */
class SecurityReportFileMetadata
{
    /** The URL to download the report. */
    public ?string $downloadUrl = null;

    /** The name of the file. */
    public ?string $fileName = null;

    /** The size of the file. */
    public ?float $size = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['downloadUrl'])) {
            $this->downloadUrl = $data['downloadUrl'];
        }
        if (isset($data['fileName'])) {
            $this->fileName = $data['fileName'];
        }
        if (isset($data['size'])) {
            $this->size = $data['size'];
        }
    }
}
