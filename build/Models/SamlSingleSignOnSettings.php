<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SamlSingleSignOnSettings
 */
class SamlSingleSignOnSettings
{
    /** The relative URI the service provider would redirect to after completion of the single sign-on flow. */
    public ?string $relayState = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['relayState'])) {
            $this->relayState = $data['relayState'];
        }
    }
}
