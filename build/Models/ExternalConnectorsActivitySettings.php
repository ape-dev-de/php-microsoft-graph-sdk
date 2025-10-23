<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsActivitySettings
 */
class ExternalConnectorsActivitySettings
{
    /** 
     * Specifies configurations to identify an externalItem based on a shared URL.
     * @var ExternalConnectorsUrlToItemResolverBase[]
     */
    public array $urlToItemResolvers = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['urlToItemResolvers'])) {
            $this->urlToItemResolvers = $data['urlToItemResolvers'];
        }
    }
}
