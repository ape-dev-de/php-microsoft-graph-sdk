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
    /**
     * Available select fields for CustomExtensionCalloutInstance
     */
    public const FIELD_CUSTOM_EXTENSION_ID = 'customExtensionId';
    public const FIELD_DETAIL = 'detail';
    public const FIELD_EXTERNAL_CORRELATION_ID = 'externalCorrelationId';
    public const FIELD_ID = 'id';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific CustomExtensionCalloutInstance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
