<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccountTargetContent
 */
class AccountTargetContent
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The type of account target content. Possible values are: unknown, includeAll, addressBook, unknownFutureValue.
     * @var AccountTargetContentType|\stdClass|null
     */
    public AccountTargetContentType|\stdClass|null $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['type'])) {
            $this->type = is_array($data['type']) ? new AccountTargetContentType($data['type']) : $data['type'];
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
