<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrinterCreateOperation resources
 *
 * Available select fields:
 * - certificate
 * - printer
 */
class PrinterCreateOperationQueryOptions extends QueryOptions
{
    public const FIELD_CERTIFICATE = 'certificate';
    public const FIELD_PRINTER = 'printer';

    /**
     * Select specific PrinterCreateOperation properties
     * 
     * @param array<string> $select Use PrinterCreateOperationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
