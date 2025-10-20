<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ArchivedPrintJob resources
 *
 * Available select fields:
 * - acquiredByPrinter
 * - acquiredDateTime
 * - completionDateTime
 * - copiesPrinted
 * - createdBy
 * - createdDateTime
 * - id
 * - printerId
 * - printerName
 * - processingState
 */
class ArchivedPrintJobQueryOptions extends QueryOptions
{
    public const FIELD_ACQUIRED_BY_PRINTER = 'acquiredByPrinter';
    public const FIELD_ACQUIRED_DATE_TIME = 'acquiredDateTime';
    public const FIELD_COMPLETION_DATE_TIME = 'completionDateTime';
    public const FIELD_COPIES_PRINTED = 'copiesPrinted';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_ID = 'id';
    public const FIELD_PRINTER_ID = 'printerId';
    public const FIELD_PRINTER_NAME = 'printerName';
    public const FIELD_PROCESSING_STATE = 'processingState';

    /**
     * Select specific ArchivedPrintJob properties
     * 
     * @param array<string> $select Use ArchivedPrintJobQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
