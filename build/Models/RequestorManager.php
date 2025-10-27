<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RequestorManager
 */
class RequestorManager
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The hierarchical level of the manager with respect to the requestor. For example, the direct manager of a requestor would have a managerLevel of 1, while the manager of the requestor's manager would have a managerLevel of 2. Default value for managerLevel is 1. Possible values for this property range from 1 to 2. */
    public ?float $managerLevel = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['managerLevel'])) {
            $this->managerLevel = is_numeric($data['managerLevel']) ? (float)$data['managerLevel'] : $data['managerLevel'];
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
