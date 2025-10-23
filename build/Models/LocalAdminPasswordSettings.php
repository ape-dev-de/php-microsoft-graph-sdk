<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LocalAdminPasswordSettings
 */
class LocalAdminPasswordSettings
{
    /**  */
    public ?bool $isEnabled = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['isEnabled'])) {
            $this->isEnabled = $data['isEnabled'];
        }
    }
}
