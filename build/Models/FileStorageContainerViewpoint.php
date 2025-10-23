<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileStorageContainerViewpoint
 */
class FileStorageContainerViewpoint
{
    /** The current user's effective role. Read-only. */
    public ?string $effectiveRole = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['effectiveRole'])) {
            $this->effectiveRole = $data['effectiveRole'];
        }
    }
}
