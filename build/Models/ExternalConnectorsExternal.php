<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsExternal
 */
class ExternalConnectorsExternal
{
    /** 
     * 
     * @var ExternalConnectorsExternalConnection[]
     */
    public array $connections = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['connections'])) {
            $this->connections = $data['connections'];
        }
    }
}
