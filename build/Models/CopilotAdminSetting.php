<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CopilotAdminSetting
 */
class CopilotAdminSetting
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var CopilotAdminLimitedMode|\stdClass|null
     */
    public mixed $limitedMode = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['limitedMode'])) {
            $this->limitedMode = $data['limitedMode'];
        }
    }
}
