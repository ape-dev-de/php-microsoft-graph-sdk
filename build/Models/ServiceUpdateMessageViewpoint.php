<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceUpdateMessageViewpoint
 */
class ServiceUpdateMessageViewpoint
{
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
}
