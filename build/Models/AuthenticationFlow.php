<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationFlow
 */
class AuthenticationFlow
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Represents the transfer methods in scope for the policy. The possible values are: none, deviceCodeFlow, authenticationTransfer, unknownFutureValue. Default value is none.
     * @var ConditionalAccessTransferMethods|\stdClass|null
     */
    public ConditionalAccessTransferMethods|\stdClass|null $transferMethod = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['transferMethod'])) {
            $this->transferMethod = is_string($data['transferMethod']) ? ConditionalAccessTransferMethods::tryFrom($data['transferMethod']) : $data['transferMethod'];
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
