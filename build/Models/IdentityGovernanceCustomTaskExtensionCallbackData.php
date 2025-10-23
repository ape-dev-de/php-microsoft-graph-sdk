<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceCustomTaskExtensionCallbackData
 */
class IdentityGovernanceCustomTaskExtensionCallbackData
{
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
        if (isset($data['operationStatus'])) {
            $this->operationStatus = $data['operationStatus'];
        }
    }
}
