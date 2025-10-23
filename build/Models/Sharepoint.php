<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Sharepoint
 */
class Sharepoint
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var SharepointSettings|\stdClass|null
     */
    public mixed $settings = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['settings'])) {
            $this->settings = is_array($data['settings']) ? new SharepointSettings($data['settings']) : $data['settings'];
        }
    }
}
