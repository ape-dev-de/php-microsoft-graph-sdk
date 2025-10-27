<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppReturnCode
 */
class Win32LobAppReturnCode
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Return code. */
    public ?float $returnCode = null;

    /**  */
    public ?Win32LobAppReturnCodeType $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['returnCode'])) {
            $this->returnCode = is_numeric($data['returnCode']) ? (float)$data['returnCode'] : $data['returnCode'];
        }
        if (isset($data['type'])) {
            $this->type = is_array($data['type']) ? new Win32LobAppReturnCodeType($data['type']) : $data['type'];
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
