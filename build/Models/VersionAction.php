<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VersionAction
 */
class VersionAction
{
    /** The name of the new version that was created by this action. */
    public ?string $newVersion = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['newVersion'])) {
            $this->newVersion = $data['newVersion'];
        }
    }
}
