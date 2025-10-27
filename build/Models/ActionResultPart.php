<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ActionResultPart
 */
class ActionResultPart
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The error that occurred, if any, during the bulk operation.
     * @var PublicError|\stdClass|null
     */
    public mixed $error = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['error'])) {
            $this->error = is_array($data['error']) ? new PublicError($data['error']) : $data['error'];
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
