<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceUpdateMessageViewpoint
 */
class ServiceUpdateMessageViewpoint
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates whether the user archived the message. */
    public ?bool $isArchived = null;

    /** Indicates whether the user marked the message as favorite. */
    public ?bool $isFavorited = null;

    /** Indicates whether the user read the message. */
    public ?bool $isRead = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isArchived'])) {
            $this->isArchived = $data['isArchived'];
        }
        if (isset($data['isFavorited'])) {
            $this->isFavorited = $data['isFavorited'];
        }
        if (isset($data['isRead'])) {
            $this->isRead = $data['isRead'];
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
