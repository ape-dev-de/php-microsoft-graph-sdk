<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PartnersBillingBlob
 */
class PartnersBillingBlob
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The blob name. */
    public ?string $name = null;

    /** The partition that contains the file. A large partition is split into multiple files, each with the same partitionValue. */
    public ?string $partitionValue = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['partitionValue'])) {
            $this->partitionValue = $data['partitionValue'];
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
