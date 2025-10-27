<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisioningStatusInfo
 */
class ProvisioningStatusInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * If status isn't success/ skipped details for the error are contained in this.
     * @var ProvisioningErrorInfo|\stdClass|null
     */
    public ProvisioningErrorInfo|\stdClass|null $errorInformation = null;

    /** 
     * Possible values are: success, warning, failure, skipped, unknownFutureValue.
     * @var ProvisioningResult|\stdClass|null
     */
    public ProvisioningResult|\stdClass|null $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['errorInformation'])) {
            $this->errorInformation = is_array($data['errorInformation']) ? new ProvisioningErrorInfo($data['errorInformation']) : $data['errorInformation'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new ProvisioningResult($data['status']) : $data['status'];
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
