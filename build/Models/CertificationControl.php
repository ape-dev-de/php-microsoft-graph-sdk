<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CertificationControl
 */
class CertificationControl
{
    /** Certification control name */
    public ?string $name = null;

    /** URL for the Microsoft Service Trust Portal */
    public ?string $url = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['url'])) {
            $this->url = $data['url'];
        }
    }
}
