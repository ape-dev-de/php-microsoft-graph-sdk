<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PendingOperations
 */
class PendingOperations
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['pendingContentUpdate'])) {
            $this->pendingContentUpdate = is_array($data['pendingContentUpdate']) ? new PendingContentUpdate($data['pendingContentUpdate']) : $data['pendingContentUpdate'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
