<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppConsentRequestScope
 */
class AppConsentRequestScope
{
    /** The name of the scope. */
    public ?string $displayName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
    }
}
