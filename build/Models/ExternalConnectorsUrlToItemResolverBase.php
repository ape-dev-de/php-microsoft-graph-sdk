<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsUrlToItemResolverBase
 */
class ExternalConnectorsUrlToItemResolverBase
{
    /** The priority which defines the sequence in which the urlToItemResolverBase instances are evaluated. */
    public ?float $priority = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['priority'])) {
            $this->priority = $data['priority'];
        }
    }
}
