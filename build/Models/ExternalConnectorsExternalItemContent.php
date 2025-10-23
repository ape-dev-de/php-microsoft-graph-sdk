<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsExternalItemContent
 */
class ExternalConnectorsExternalItemContent
{
    /**  */
    public ?ExternalConnectorsExternalItemContentType $type = null;

    /** The content for the externalItem. Required. */
    public ?string $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['type'])) {
            $this->type = is_array($data['type']) ? new ExternalConnectorsExternalItemContentType($data['type']) : $data['type'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
