<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PendingOperations
 */
class PendingOperations
{
    /** 
     * A property that indicates that an operation that might update the binary content of a file is pending completion.
     * @var PendingContentUpdate|\stdClass|null
     */
    public mixed $pendingContentUpdate = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['pendingContentUpdate'])) {
            $this->pendingContentUpdate = $data['pendingContentUpdate'];
        }
    }
}
