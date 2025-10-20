<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomExtensionCalloutInstance resources
 *
 * Available select fields:
 * - customExtensionId
 * - detail
 * - externalCorrelationId
 * - id
 * - status
 */
class CustomExtensionCalloutInstanceQueryOptions extends QueryOptions
{
    public const FIELD_CUSTOM_EXTENSION_ID = 'customExtensionId';
    public const FIELD_DETAIL = 'detail';
    public const FIELD_EXTERNAL_CORRELATION_ID = 'externalCorrelationId';
    public const FIELD_ID = 'id';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific CustomExtensionCalloutInstance properties
     * 
     * @param array<string> $select Use CustomExtensionCalloutInstanceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
