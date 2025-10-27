<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommsNotification
 */
class CommsNotification
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?ChangeType $changeType = null;

    /** URI of the resource that was changed. */
    public ?string $resourceUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['changeType'])) {
            $this->changeType = is_string($data['changeType']) ? ChangeType::tryFrom($data['changeType']) : $data['changeType'];
        }
        if (isset($data['resourceUrl'])) {
            $this->resourceUrl = $data['resourceUrl'];
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
