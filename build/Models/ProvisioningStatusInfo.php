<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisioningStatusInfo
 */
class ProvisioningStatusInfo
{
    /** 
     * If status isn't success/ skipped details for the error are contained in this.
     * @var ProvisioningErrorInfo|\stdClass|null
     */
    public mixed $errorInformation = null;

    /** 
     * Possible values are: success, warning, failure, skipped, unknownFutureValue.
     * @var ProvisioningResult|\stdClass|null
     */
    public mixed $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['errorInformation'])) {
            $this->errorInformation = is_array($data['errorInformation']) ? new ProvisioningErrorInfo($data['errorInformation']) : $data['errorInformation'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new ProvisioningResult($data['status']) : $data['status'];
        }
    }
}
