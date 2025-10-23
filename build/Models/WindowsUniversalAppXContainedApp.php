<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsUniversalAppXContainedApp
 */
class WindowsUniversalAppXContainedApp
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The app user model ID of the contained app of a WindowsUniversalAppX app. */
    public ?string $appUserModelId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['appUserModelId'])) {
            $this->appUserModelId = $data['appUserModelId'];
        }
    }
}
