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
            $this->isArchived = is_bool($data['isArchived']) ? $data['isArchived'] : (bool)$data['isArchived'];
        }
        if (isset($data['isFavorited'])) {
            $this->isFavorited = is_bool($data['isFavorited']) ? $data['isFavorited'] : (bool)$data['isFavorited'];
        }
        if (isset($data['isRead'])) {
            $this->isRead = is_bool($data['isRead']) ? $data['isRead'] : (bool)$data['isRead'];
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
