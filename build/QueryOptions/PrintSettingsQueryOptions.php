<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintSettings resources
 *
 * Available select fields:
 * - documentConversionEnabled
 * - printerDiscoverySettings
 */
class PrintSettingsQueryOptions extends QueryOptions
{
    public const FIELD_DOCUMENT_CONVERSION_ENABLED = 'documentConversionEnabled';
    public const FIELD_PRINTER_DISCOVERY_SETTINGS = 'printerDiscoverySettings';

    /**
     * Select specific PrintSettings properties
     * 
     * @param array<string> $select Use PrintSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
