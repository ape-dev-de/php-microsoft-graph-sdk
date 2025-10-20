<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrinterBase resources
 *
 * Available select fields:
 * - capabilities
 * - defaults
 * - displayName
 * - isAcceptingJobs
 * - location
 * - manufacturer
 * - model
 * - status
 * - jobs
 */
class PrinterBaseQueryOptions extends QueryOptions
{
    public const FIELD_CAPABILITIES = 'capabilities';
    public const FIELD_DEFAULTS = 'defaults';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_ACCEPTING_JOBS = 'isAcceptingJobs';
    public const FIELD_LOCATION = 'location';
    public const FIELD_MANUFACTURER = 'manufacturer';
    public const FIELD_MODEL = 'model';
    public const FIELD_STATUS = 'status';
    public const FIELD_JOBS = 'jobs';

    /**
     * Select specific PrinterBase properties
     * 
     * @param array<string> $select Use PrinterBaseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
