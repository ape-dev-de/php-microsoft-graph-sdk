<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InsightIdentity
 */
class InsightIdentity
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The ID of the user who shared the item. */
    public ?string $id = null;

    /** The email address of the user who shared the item. */
    public ?string $address = null;

    /** The display name of the user who shared the item. */
    public ?string $displayName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['address'])) {
            $this->address = $data['address'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
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
