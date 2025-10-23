<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityExportFileMetadata
 */
class SecurityExportFileMetadata
{
    /**  */
    public ?string $downloadUrl = null;

    /**  */
    public ?string $fileName = null;

    /**  */
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
