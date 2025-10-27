<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnTokenIssuanceStartReturnClaim
 */
class OnTokenIssuanceStartReturnClaim
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The identifier of the claim returned by an API that is to be add to a token being issued. */
    public ?string $claimIdInApiResponse = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['claimIdInApiResponse'])) {
            $this->claimIdInApiResponse = $data['claimIdInApiResponse'];
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
