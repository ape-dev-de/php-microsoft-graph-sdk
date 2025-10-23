<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsConfiguration
 */
class ExternalConnectorsConfiguration
{
    /** 
     * A collection of application IDs for registered Microsoft Entra apps that are allowed to manage the externalConnection and to index content in the externalConnection.
     * @var string[]
     */
    public array $authorizedAppIds = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['authorizedAppIds'])) {
            $this->authorizedAppIds = $data['authorizedAppIds'];
        }
    }
}
