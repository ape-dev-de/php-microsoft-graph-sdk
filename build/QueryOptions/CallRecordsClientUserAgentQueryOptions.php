<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsClientUserAgent resources
 *
 * Available select fields:
 * - azureADAppId
 * - communicationServiceId
 * - platform
 * - productFamily
 */
class CallRecordsClientUserAgentQueryOptions extends QueryOptions
{
    public const FIELD_AZURE_ADAPP_ID = 'azureADAppId';
    public const FIELD_COMMUNICATION_SERVICE_ID = 'communicationServiceId';
    public const FIELD_PLATFORM = 'platform';
    public const FIELD_PRODUCT_FAMILY = 'productFamily';

    /**
     * Select specific CallRecordsClientUserAgent properties
     * 
     * @param array<string> $select Use CallRecordsClientUserAgentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
