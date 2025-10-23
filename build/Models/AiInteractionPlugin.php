<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteractionPlugin
 */
class AiInteractionPlugin
{
    /** The unique identifier of the plugin. */
    public ?string $identifier = null;

    /** The display name of the plugin. */
    public ?string $name = null;

    /** The version of the plugin used. */
    public ?string $version = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['identifier'])) {
            $this->identifier = $data['identifier'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
    }
}
