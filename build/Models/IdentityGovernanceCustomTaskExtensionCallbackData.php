<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceCustomTaskExtensionCallbackData
 */
class IdentityGovernanceCustomTaskExtensionCallbackData
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Operation status that's provided by the Azure Logic App indicating whenever the Azure Logic App has run successfully or not. Supported values: completed, failed, unknownFutureValue.
     * @var IdentityGovernanceCustomTaskExtensionOperationStatus|\stdClass|null
     */
    public mixed $operationStatus = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['operationStatus'])) {
            $this->operationStatus = is_array($data['operationStatus']) ? new IdentityGovernanceCustomTaskExtensionOperationStatus($data['operationStatus']) : $data['operationStatus'];
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
